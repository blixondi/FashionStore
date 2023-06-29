<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function cart(){
        // $this->authorize("checkmember");
        // dd(session('cart'));
        $cart = session("cart");
        return view("customer.cart",compact("cart"));
    }
    function checkout(){
        // $this->authorize("checkmember");
        // if(session("cart")){
        //     $t = new Transaction();
        //     $t->customer_id = Auth::user()->id;
        //     $t->transaction_date = Carbon::now()->toDateTimeString();
        //     $t->total = 0;
        //     $t->save(); 
        //     foreach(session("cart") as $key => $value){
        //         $subtotal = $value['quantity'] * $value['price'];
        //         $t->products()->attach($key,[
        //             "quantity" => $value['quantity'],
        //             "subtotal" => $subtotal,
        //         ]);
        //         $t->total += $subtotal;
        //     }
        //     $t->save();
        //     session()->forget("cart");
        //     return redirect('/product-page');
        // }
        // else{
        //     return redirect('/product-page');
        // }
    }
    function checkTransaction(){
        $transaction = Transaction::all();
    }
}
