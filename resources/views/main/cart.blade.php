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
                  <form action="{{url('/checkout')}}" method="post">
                    @csrf
                    <h3 class="mb-4">Keranjang</h3>
                    <span class="badge bg-grape rounded-pill ms-1">1 poin: Rp. 10.000,00</span>
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
                                        <p class="price" id='subtotal' subtotal="{{$total}}">@currency($total)</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Pajak</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price" id='tax' tax="{{$tax}}">@currency($tax)</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Poin yang didapat</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price" id='gainedpoint'>{{ $point }}</p>
                                    </td>
                                </tr>
                                <tr>
                                  <td class="ps-0"><strong class="text-dark">Diskon poin</strong></td>
                                  <td class="pe-0 text-end">
                                      <p class="price text-red" id="diskon">@currency(0)</p>
                                  </td>                                
                                </tr>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Grand Total</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price text-dark fw-bold" id='grandtotal' grandtotal="{{$grandtotal}}">@currency($grandtotal)</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <span class="badge bg-grape rounded-pill ms-1">Jumlah poin : {{Auth::user()->point_member}} poin</span>
                        <div class="col d-flex flex-row">
                          <div>
                            <div class="form-floating">
                              @if(Auth::user()->point_member>0 && $total > 100000)
                              <input id="point" type="number" class="form-control" placeholder="Poin" name="point" min="0" max="{{Auth::user()->point_member}}">
                              <label for="textInputExample">Poin</label>
                              @else
                              <input disabled id="txtQty" type="number" class="form-control" placeholder="Poin" min="1">
                              <label for="textInputExample">Poin</label>
                              @endif
                            </div>
                            <!--/.form-select-wrapper -->
                          </div>
                          @if(Auth::user()->point_member > 0 && $total > 100000)
                          <div class="flex-grow-2 mx-1">
                            <input class="form-check-input ms-2" type="checkbox" value="" name="checkpoint[]"><span class="ms-1">Gunakan Poin</span>
                          </div>
                          @else
                          <div class="flex-grow-2 mx-1">
                            <input disabled class="form-check-input ms-2" type="checkbox" value=""><span class="ms-1">Gunakan Poin</span>
                          </div>
                          @endif
                        </div>
                        
                    </div>
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
       
        $(document).ready(function () {
          $("#point").on('change',function(){
            let subtotal = $('#subtotal').attr('subtotal');
            let tax = $('#tax').attr('tax');
            let gainedpoint = $('#gainedpoint').attr('gainedpoint');
            let grandtotal = $('#grandtotal').attr('grandtotal');
            let ownedpoint = $('#point').val();

            // alert(subtotal);
            // alert(tax);
            // alert(gainedpoint);
            // alert(grandtotal);
            // alert(ownedpoint);

            let totalDiskon = ownedpoint * 10000;
            let newSubtotal = subtotal - totalDiskon;
            $('#subtotal').html('Rp. ' + newSubtotal);
            let newTax = newSubtotal * 0.11;
            $('#tax').html('Rp. ' + newTax);
            // let newGainedPoint = floor(newSubtotal / 100000);
            $('#diskon').html('Rp. ' + totalDiskon);
            let newGrandTotal = newSubtotal + newTax;
            $('#grandtotal').html('Rp. ' + newGrandTotal);

          });
        });
    </script>
@endsection
