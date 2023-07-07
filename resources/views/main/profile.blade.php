@extends('layouts.shop')
@section("content")

<div class="modal fade" id="modal-transaction" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Detail Transaksi</h1>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Ubah Profile</h1>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<div class="card">
    <div class="card-body">
        <div class="row text-center">
            <h1>Profil Pengguna</h1>
        </div>
        <div class="row">
                <div class="col-lg-4 ">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="card-title">{{Str::ucfirst(Auth::user()->fname) .' '.Str::ucfirst(Auth::user()->lname) }}</h2>
                            <h6 class="">{{Auth::user()->email}}</h6>
                            <p>{{Auth::user()->phone_number}}</p>
                            <p>{{Auth::user()->point_member}} poin</p>
                            <a href="#" class="btn btn-primary rounded-pill" id="btn-edit"
                                data-bs-toggle="modal" onclick="showProfile()" data-bs-target="#modal-profile">Sunting Profil</a>
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
                                            <th>Waktu Pembelian</th>
                                            <th>Total Belanja</th>
                                            <th>Poin yang Diperoleh</th>
                                            <th>Pajak</th>
                                            <th>Detail Pembelian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction as $t)
                                            <tr>
                                                <td>{{$t->created_at}}</td>
                                                <td>@currency($t->total)</td>
                                                <td>{{$t->received_point}} poin</td>
                                                <td>@currency($t->pajak)</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary rounded-pill"
                                                    data-bs-toggle="modal" onclick="showTransaction({{$t->id}})" data-bs-target="#modal-transaction">Detail</a></td>
                                            </tr>
                                        @endforeach
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

@section('js')
<script>
    function showTransaction(id){
        let idtransaction = id
        $.get("{{url('/transaction')}}/" + idtransaction, function(data){
            $("#modal-transaction .modal-body").html(data);
            $("#modal-transaction").show();
        });
    }

    function showProfile(){
        $.get("{{url('/profile/edit')}}", function(data){
            $("#modal-profile .modal-body").html(data);
            $("#modal-profile").show();
        });
    }
</script>
@endsection
