<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = "/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'username' => ['required', 'string', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'fname' => ['required', 'string', 'max:255'],
                'lname' => ['required', 'string', 'max:255'],
                'phone_number' => ['required', 'min:10', 'max:13'],
            ],
            [
                'username.required' => "Username wajib diisi.",
                'username.unique' => "Username sudah terpakai.",

                'password.required' => "Password wajib diisi.",
                'password.min' => 'Password minimal 8 karakter.',
                'password.confirmed' => 'Password tidak sama.',

                'email.required' => 'E-mail wajib diisi.',
                'email.unique' => "Email sudah terpakai.",

                'fname.required' => 'Nama depan wajib diisi.',
                'lname.required' => 'Nama belakang wajib diisi.',

                'phone_number.required' => 'Nomor telepon wajib diisi.',
                'phone_number.min' => 'Nomor telepon harus 10 hingga 13 karakter',
                'phone_number.max' => 'Nomor telepon harus 10 hingga 13 karakter'

            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'role' => 'pembeli',
            'phone_number' => $data['phone_number'],
        ]);
    }
}
