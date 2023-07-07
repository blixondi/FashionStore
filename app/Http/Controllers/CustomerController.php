<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    function detailTransaction($id)
    {
        $transaction = Transaction::find($id);
        return view('main.transactiondetail', compact("transaction"));
    }

    #region

    function indexcust()
    {
        $users = User::all()->where('role','pembeli');
        return view('admin.customer.admincustomer', compact('users'));
    }

    function indexowner()
    {
        $users = User::all()->where('role','owner');
        return view('admin.owner.adminowner', compact('users'));
    }

    function indexstaff()
    {
        $users = User::all()->where('role','staff');
        return view('admin.staff.adminstaff', compact('users'));
    }


    #endregion

    public function storeCust(Request $request)
    {
        $name = User::where("username", "=", $request->username)->first();
        if ($name) {
            return back()->withInput()->with("message", "Sudah ada");
        }

        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->role = "pembeli";
        $user->point_member = 0;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect()->route("admcustomer.index")->with("message", "Insert Successfull");
    }

    public function storeStaff(Request $request)
    {
        $name = User::where("username", "=", $request->username)->first();
        if ($name) {
            return back()->withInput()->with("message", "Sudah ada");
        }

        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->role = "staff";
        $user->point_member = 0;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect()->route("admstaff.index")->with("message", "Insert Successfull");
    }

    public function storeOwner(Request $request)
    {
        $name = User::where("username", "=", $request->username)->first();
        if ($name) {
            return back()->withInput()->with("message", "Sudah ada");
        }

        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->role = "owner";
        $user->point_member = 0;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect()->route("admowner.index")->with("message", "Insert Successfull");
    }

    public function edit($id)
    {
        $user = User::where("id", "=", $id)->first();
        return view('admin.customer.admcustform', ['users' => $user]);
    }

    public function updateAdmCust(Request $request, $id)
    {
        $user = User::where("id", "=", $id)->first();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect()->route("admcustomer.index")->with("message", "Insert Successfull");
    }

    public function updateAdmStaff(Request $request, $id)
    {
        $user = User::where("id", "=", $id)->first();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect()->route("admstaff.index")->with("message", "Insert Successfull");
    }

    public function updateAdmOwner(Request $request, $id)
    {
        $user = User::where("id", "=", $id)->first();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect()->route("admowner.index")->with("message", "Update Successfull");
    }

    public function deleteData(Request $request)
    {
        $id = $request->get('id');
        $data = User::find($id);
        $data->delete();
        return response()->json(array(
            'status' => 'oke',
            'msg' => 'Kategori berhasil di hapus'
        ), 200);
    }

    public function updateCust($id)
    {
        $user = User::where("id", "=", $id)->first();
        return view('admin.customer.updateadmcust', ['users' => $user]);
    }

    public function updateStaff($id)
    {
        $user = User::where("id", "=", $id)->first();
        return view('admin.staff.updateadmstaff', ['users' => $user]);
    }

    public function updateOwner($id)
    {
        $user = User::where("id", "=", $id)->first();
        return view('admin.owner.updateadmowner', ['users' => $user]);
    }

    public function editProfile()
    {
        $userid = Auth::user()->id;
        $user = User::where("id", "=", $userid);
        return view('main.editprofileform');
    }

    public function updateProfile(Request $request)
    {
        $user = User::where("id", "=", Auth::user()->id)->first();
        $user->username = $request->username;
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->email = $request->email;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect()->route('profile')->with("message", "Update berhasil");
    }
}
