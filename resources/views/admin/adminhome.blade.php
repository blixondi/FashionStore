@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
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
                      <i class="ti ti-currency-dollar fs-6"></i>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
