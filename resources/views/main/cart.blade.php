@extends('layouts.shop')

@section('title', 'Cart | Fashionstore')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-12">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <form action="{{ url('/updatecart') }}" method="POST">
                            @csrf
                            @if (session('cart'))
                                <table class="table text-center shopping-cart">
                                    <thead>
                                        <tr>
                                            <th class="ps-0 w-25">
                                                <div class="h4 mb-0 text-start">Produk</div>
                                            </th>
                                            <th>
                                                <div class="h4 mb-0">Harga</div>
                                            </th>
                                            <th>
                                                <div class="h4 mb-0">Jumlah</div>
                                            </th>
                                            <th>
                                                <div class="h4 mb-0">Total</div>
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($cart as $c)
                                            @php
                                                $subtotal = $c['price'] * $c['quantity'];
                                                $total += $subtotal;
                                            @endphp
                                            <tr>
                                                <td class="option text-start d-flex flex-row align-items-center ps-0">
                                                    <figure class="rounded w-17"><a
                                                            href="{{ route('products.show', $c['id']) }}"><img
                                                                src="{{ asset('./assets/img/products/' . $c['filename']) }}"
                                                                srcset="./assets/img/photos/sth1@2x.jpg 2x"
                                                                alt="" /></a></figure>
                                                    <div class="w-100 ms-4">
                                                        <h3 class="post-title h6 lh-xs mb-1"><a
                                                                href="{{ route('products.show', $c['id']) }}"
                                                                class="link-dark">{{ Str::ucfirst($c['name']) }}</a></h3>
                                                        <div class="small">Brand: {{ $c['brand'] }}</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">@currency($c['price'])</span></p>
                                                </td>
                                                <td>
                                                    <div class="form-floating">
                                                        <input id="txtQty" type="number" class="form-control"
                                                            placeholder="Text Input" value="{{ $c['quantity'] }}"
                                                            min="0" name="qty{{ $c['id'] }}">
                                                        <label for="textInputExample">Jumlah</label>
                                                    </div>
                                                    <!--/.form-select-wrapper -->
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">@currency($subtotal)</span></p>
                                                </td>
                                                <td class="pe-0">
                                                    <a href="" class="link-dark"><i class="uil uil-trash-alt"
                                                            id="btn-delete" id-item="{{ $c['id'] }}" onclick="deleteCart()"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @csrf
                                <input type="submit" class="btn btn-primary rounded" value="Update Keranjang">
                        </form>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="row mt-0 gy-4">
                        <div class="col-md-8 col-lg-7">
                            <div class="form-floating input-group">
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
                <div class="col-lg-4">
                    <h3 class="mb-4">Keranjang</h3>
                    <div class="table-responsive">
                        <table class="table table-order">
                            <tbody>
                                <tr>
                                    @php
                                        $tax = $total * 0.11;
                                        $grandtotal = $total + $tax;
                                        $point = floor($total / 100000);
                                    @endphp
                                    <td class="ps-0"><strong class="text-dark">Subtotal</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price">@currency($total)</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Pajak</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price">@currency($tax)</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Poin yang didapat</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price">{{ $point }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Grand Total</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price text-dark fw-bold">@currency($grandtotal)</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <form action="/checkout" method="post">
                        @csrf
                        <input type="submit" value="Checkout" class="btn btn-primary rounded w-100 mt-4">
                    </form>
                </div>
            @else
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h1>Cart Masih Kosong</h1>
                    </div>
                </div>
                @endif

                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
@section('js')
    <script>
        // $(document).ready(function(){
        //   $("#btn-delete").on('click',function(){
        //     let id = $(this).attr('id-item');
        //     $.post("{{ url('deletecart') }}"+"/"+id,{
        //       _token:"{{ csrf_token() }}",
        //       itemid:id,
        //     },function(data){
        //       if (data.status == "oke"){
        //         Swal.fire({
        //           icon:"info",
        //           title:data.pesan,
        //         })
        //       }
        //     })
        //   });
        // })
        function deleteCart() {
            let id = $('#btn-delete').attr('id-item');
            $.post("{{ url('/deletecart') }}/" + id, {
                    _token: "{{ csrf_token() }}"
                },
                function(data) {
                    if (data.status == "oke") {
                        Swal.fire({
                            icon: "info",
                            title: data.pesan,
                        })
                    }
                },
            );
        }
    </script>
@endsection
