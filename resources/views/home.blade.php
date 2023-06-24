@extends('layouts.shop')

@section('title', 'Home | FashionStore')

@section('content')

<section class="wrapper bg-gradient-primary">
    <div class="container pt-10 pt-md-14">
      <div class="row gx-2 gy-10 align-items-center">
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <h1 class="display-1 mb-5 mx-md-10 mx-lg-0">Selamat datang di FashionStore, tempat anda menemukan gaya fashion yang memukau bagi <br> <span class="typer text-primary text-nowrap" data-delay="100" data-words="Pria.,Wanita.,Anak."></span><span class="cursor text-primary" data-owner="typer"></span></h1>
          <p class="lead fs-23 mb-7">Jadikan penampilan Anda tak terlupakan dengan pilihan fashion eksklusif yang akan meningkatkan gaya Anda ke level berikutnya.</p>
          <div class="d-flex justify-content-center justify-content-lg-start mb-4" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <span><a class="btn btn-lg btn-primary rounded-pill me-2 scroll" href="#demos">Selengkapnya</a></span>
          </div>
        </div>
        <!-- /column -->
        <div class="col-lg-6 ms-auto position-relative">
          <div class="row g-4">
            <div class="col-4 d-flex flex-column ms-auto" data-cues="fadeIn" data-group="col-start" data-delay="900">
              <div class="ms-auto mt-6"><img class="img-fluid rounded shadow-lg" src="{{asset('assets/img/home1.jpg')}}" srcset="{{asset('assets/img/home1.jpg')}} 2x" alt="" /></div>
              <div class="ms-auto mt-4"><img class="img-fluid rounded shadow-lg" src="{{asset('assets/img/home9.jpg')}}" srcset="{{asset('assets/img/home9.jpg')}} 2x" alt="" /></div>
              <div class="ms-auto mt-4"><img class="img-fluid rounded shadow-lg" src="{{asset('assets/img/home10.jpg')}}" srcset="{{asset('assets/img/home10.jpg')}} 2x" alt="" /></div>
            </div>
            <!-- /column -->
            <div class="col-4" data-cues="fadeIn" data-group="col-middle">
              <div><img class="w-100 img-fluid rounded shadow-lg" src="{{asset('assets/img/home4.jpg')}}" srcset="{{asset('assets/img/home4.jpg')}} 2x" alt="" /></div>
              <div><img class="w-100 img-fluid rounded shadow-lg mt-4" src="{{asset('assets/img/home7.jpg')}}" srcset="{{asset('assets/img/home7.jpg')}} 2x" alt="" /></div>
              <div><img class="img-fluid rounded shadow-lg mt-4" src="{{asset('assets/img/home5.jpg')}}" srcset="{{asset('assets/img/home5.jpg')}} 2x" alt="" /></div>
            </div>
            <!-- /column -->
            <div class="col-4 d-flex flex-column" data-cues="fadeIn" data-group="col-end" data-delay="900">
              <div class="mt-8"><img class="img-fluid rounded shadow-lg" src="{{asset('assets/img/home6.jpg')}}" srcset="{{asset('assets/img/home6.jpg')}} 2x" alt="" /></div>
              <div class="mt-4"><img class="img-fluid rounded shadow-lg" src="{{asset('assets/img/home8.jpg')}}" srcset="{{asset('assets/img/home8.jpg')}} 2x" alt="" /></div>
              <div class="mt-4 mb-10"><img class="img-fluid rounded shadow-lg" src="{{asset('assets/img/home2.jpg')}}" srcset="{{asset('assets/img/home2.jpg')}} 2x" alt="" /></div>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>

@endsection
