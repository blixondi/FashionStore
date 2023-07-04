<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    function cart()
    {
        $cart = session("cart");
        return view("main.cart", compact("cart"));
    }


    function checkout()
    {
        if (session('cart')) {
            $t = new Transaction();
            $user = User::find(Auth::user()->id);
            $t->users_id = Auth::user()->id;
            $t->pajak = 0;
            $t->total = 0;
            $t->received_point = 0;
            $t->save();
            $total = 0;
            foreach (session('cart') as $key => $value) {
                $subtotal = $value['quantity'] * $value['price'];
                $t->products()->attach($key, [
                    "quantity" => $value['quantity'],
                    "total_price" => $subtotal
                ]);
                $t->total += $subtotal;
                $total += $subtotal;
            }
            $t->pajak = $total * 0.11;
            $t->received_point = floor($total / 100000);
            $t->total = $total + ($total * 0.11);
            $user->point_member += floor($total / 100000);
            $user->save();
            $t->save();
            session()->forget('cart');
            return redirect('/')->with('message', 'Sukses checkout! Silahkan cek profile anda untuk informasi mengenai transaksi');;
        } else {
            return redirect('/');
        }
    }
    function checkTransaction()
    {
        // $user = User::find();
        $user = Auth::user()->id;
        $transaction = Transaction::all()->where('users_id', $user);
        // $transaction = Transaction::find($user->id);
        return view("main.profile", compact('transaction'));
    }



    #region

    function indexadmin(){
        $user = User::all();
        return view('admin.admincustomer',compact('user'));
    }


    #endregion
}
