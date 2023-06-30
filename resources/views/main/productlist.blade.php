@extends('layouts.shop')
@section('content')
<section class="wrapper bg-gray">
    <div class="container py-12 py-md-16 text-center">
      <div class="row">
        <div class="col-lg-10 col-xxl-8 mx-auto">
          <h1 class="display-1 mb-3">Shop Layout</h1>
          <p class="lead mb-1">Integer posuere erat a ante venenatis dapibus.</p>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row align-items-center mb-10 position-relative zindex-1">
        <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
          <h2 class="display-6">New Arrivals</h2>
          <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
          </nav>
          <!-- /nav -->
        </div>
        <!--/column -->
        <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
          <div class="form-select-wrapper">
            <select class="form-select">
              <option value="popularity">Sort by popularity</option>
              <option value="rating">Sort by average rating</option>
              <option value="newness">Sort by newness</option>
              <option value="price: low to high">Sort by price: low to high</option>
              <option value="price: high to low">Sort by price: high to low</option>
            </select>
          </div>
          <!--/.form-select-wrapper -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="grid grid-view projects-masonry shop mb-13">
        <div class="row gx-md-8 gy-10 gy-md-13 isotope">

          @foreach ($product as $p)
            <div class="project item col-md-6 col-xl-4">
                <figure class="rounded mb-6">
                <img src="{{asset("/assets/img/products/".$p->img_url)}}" alt="" />
                {{-- <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a> --}}
                <a class="item-view" href="" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                {{-- <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a> --}}
                </figure>
                <div class="post-header">
                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                    <div class="post-category text-ash mb-0">{{$p->category->name}}</div>
                    <span class="ratings four"></span>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                    <div class="post-category text-ash mb-0">{{$p->type->name}}</div>
                </div>
                <h2 class="post-title h3 fs-22"><a href="{{route('product.show',$p->id)}}" class="link-dark">{{Str::ucfirst($p->name)}}</a></h2>
                <p class="price"><span class="amount">@currency($p->price)</span></p>
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /.item -->

          @endforeach
        </div>
        <!-- /.row -->
      </div>
      <!-- /.grid -->
      <!-- /nav -->
    </div>
    <!-- /.container -->
  </section>
@endsection
