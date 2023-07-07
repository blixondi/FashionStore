@extends('layouts.shop')
@section("content")

<div class="modal fade" id="modalTransaction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Transaksi</h4>
                </div>
                <div class="modal-body">
                    Update Data 1
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
                                            <th>Total Belanja</th>
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
                                                <td><button class="btn btn-primary" onclick="showTransaction({{$t->id}})">Detail</button></td>
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
        $.get("{{url('/transaction')}}/" + id, function(data){
            $("#modalTransaction .modal-body").html(data);
            $("#modalTransaction").show()
        });
    }
</script>
@endsection
