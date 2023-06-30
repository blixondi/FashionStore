<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
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
            $t->users_id = Auth::user()->id;
            $t->pajak = 0;
            $t->total = 0;
            $t->received_point = 0;
            $t->save();
            foreach (session('cart') as $key => $value) {
                $subtotal = $value['quantity'] * $value['price'];
                $total = 0;
                $t->products()->attach($key, [
                    "quantity" => $value['quantity'],
                    "subtotal" => $subtotal
                ]);
                $t->total += $subtotal;
                $total += $subtotal;
                $t->pajak = $total * 0.11;
                $t->received_point = floor($total / 100000);
            }
            $t->save();
            session()->forget('cart');
            return redirect('/');
        } else {
            return redirect('/');
        }
    }
    function checkTransaction()
    {
        $transaction = Transaction::all();
    }
}
