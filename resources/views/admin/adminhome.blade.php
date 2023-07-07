@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-9 fw-semibold"> Pelanggan dengan transaksi paling banyak </h5>
        </div>
        <div class="card-body">
            <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold">{{$transaction[0]->username}} </h5>
                  <h4 class="fw-semibold mb-3">{{$transaction[0]->total_pembelian}} Transaksi</h4>
                  <div class="d-flex align-items-center pb-1">
                    <p class="fs-3 mb-0">{{$transaction[0]->username}} melakukan transaksi paling banyak</p>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-end">
                    <div
                      class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                      <button href="" onclick="transaksi()"> <i class="ti ti-currency-dollar fs-6"></i></button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

    <div class="modal fade" id="modalTransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Data total transaksi berdasarkan pelanggan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body p-4">
                            <table class="table text-nowrap mb-0 align-middle" id="table">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Username</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Total Pembelian</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaction as $t)
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $t->username }}</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1">{{ $t->total_pembelian }}</h6>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-update"class="btn btn-secondary m-1" onclick="update()">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function transaksi() {
            $("#modalTransaksi").modal("show");
        }
    </script>
@endsection
