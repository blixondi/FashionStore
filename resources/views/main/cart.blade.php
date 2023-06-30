@extends('layouts.shop')
@section('content')
<section class="wrapper bg-light">
    <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
      <div class="row gx-md-8 gx-xl-12 gy-12">
        <div class="col-lg-8">
          <div class="table-responsive">
            @if (session("cart"))
              <table class="table text-center shopping-cart">
                <thead>
                  <tr>
                    <th class="ps-0 w-25">
                      <div class="h4 mb-0 text-start">Product</div>
                    </th>
                    <th>
                      <div class="h4 mb-0">Price</div>
                    </th>
                    <th>
                      <div class="h4 mb-0">Quantity</div>
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
                          <tr>
                          <td class="option text-start d-flex flex-row align-items-center ps-0">
                              <figure class="rounded w-17"><a href="./shop-product.html"><img src="{{asset("./assets/img/products/".$c['filename'])}}" srcset="./assets/img/photos/sth1@2x.jpg 2x" alt="" /></a></figure>
                              <div class="w-100 ms-4">
                              <h3 class="post-title h6 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">{{Str::ucfirst($c['name'])}}</a></h3>
                              <div class="small">Brand: {{$c['brand']}}</div>
                              </div>
                          </td>
                          <td>
                              <p class="price"><span class="amount">@currency($c['price'])</span></p>
                          </td>
                          <td>
                            <div class="form-floating">
                              <input id="txtQty" type="number" class="form-control" placeholder="Text Input" value="{{$c['quantity']}}" min="0">
                              <label for="textInputExample">Quantity</label>
                            </div>
                              <!--/.form-select-wrapper -->
                          </td>
                          <td>
                              <p class="price"><span class="amount">$45.99</span></p>
                          </td>
                          <td class="pe-0">
                              <a href="#" class="link-dark"><i class="uil uil-trash-alt"></i></a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
                <div class="row mt-0 gy-4">
                  <div class="col-md-8 col-lg-7">
                    <div class="form-floating input-group">
                  <input type="url" class="form-control" placeholder="Enter promo code" id="seo-check">
                  <label for="seo-check">Enter promo code</label>
                  <button class="btn btn-primary" type="button">Apply</button>
                </div>
                <!-- /.input-group -->
              </div>
              <!-- /column -->
              <div class="col-md-4 col-lg-5 ms-auto ms-lg-0 text-md-end">
                <a href="#" class="btn btn-primary rounded">Update Cart</a>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /column -->
          <div class="col-lg-4">
            <h3 class="mb-4">Order Summary</h3>
            <div class="table-responsive">
              <table class="table table-order">
                <tbody>
                  <tr>
                    <td class="ps-0"><strong class="text-dark">Subtotal</strong></td>
                    <td class="pe-0 text-end">
                      <p class="price">$135.99</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0"><strong class="text-dark">Discount (5%)</strong></td>
                    <td class="pe-0 text-end">
                      <p class="price text-red">-$6.8</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0"><strong class="text-dark">Shipping</strong></td>
                    <td class="pe-0 text-end">
                      <p class="price">$10</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0"><strong class="text-dark">Grand Total</strong></td>
                    <td class="pe-0 text-end">
                      <p class="price text-dark fw-bold">$152.79</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <a href="#" class="btn btn-primary rounded w-100 mt-4">Proceed to Checkout</a>
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
