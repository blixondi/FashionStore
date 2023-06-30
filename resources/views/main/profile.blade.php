@extends('layouts.shop')
@section("content")
<div class="card">
    <div class="card-body">
        <div class="row text-center">
            <h1>Profil Pengguna</h1>
        </div>
        <div class="row">
                <div class="col-lg-4 ">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{asset("assets/img/men.jpg")}}" width="100%" alt="" class="rounded">
                            <h2 class="card-title">{{Str::ucfirst($user->fname)  .' '.Str::ucfirst($user->lname) }}</h2>
                            <h6 class="">{{$user->email}}</h6>
                            <p>{{$user->phone_number}}</p>
                            <p>{{$user->point_member}} poin</p>
                            <button class="btn btn-primary">Sunting profil</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h1 class="card-title">Riwayat Belanja</h1>
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Poin yang Diperoleh</th>
                                            <th>Pajak</th>
                                            <th>Total Belanja Sebelum Pajak</th>
                                            <th>Waktu Pembelian</th>
                                            <th>Detail Pembelian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction as $t)
                                            <tr>
                                                <td>{{$t->id}}</td>
                                                <td>{{$t->received_point}} poin</td>
                                                <td>@currency($t->pajak)</td>
                                                <td>@currency($t->total)</td>
                                                <td>{{$t->created_at}}</td>
                                                <td><a href="#">Detail</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h1 class="">Riwayat Poin</h1>
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>a</th>
                                            <th>a</th>
                                            <th>a</th>
                                            <th>a</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($transaction->products as $t)
                                            <tr>
                                                <td>{{$t->id}}</td>
                                                <td>{{$t->received_point}} poin</td>
                                                <td>@currency($t->pajak)</td>
                                                <td>@currency($t->total)</td>
                                                <td>{{$t->created_at}}</td>
                                                <td><a href="#">Detail</a></td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection