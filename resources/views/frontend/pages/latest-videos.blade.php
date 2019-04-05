@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">
        <h1>Latest Videos</h1>
    
        <div class="row text-center text-lg-left">

            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/a-v-1.jpg') }} alt="">
                  </a>
            </div>
            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/a-v-2.jpg') }} alt="">
                  </a>
            </div>
            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/a-v-3.jpg') }} alt="">
                  </a>
            </div>
            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/b-v-1.jpg') }} alt="">
                  </a>
            </div>
            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/b-v-2.jpg') }} alt="">
                  </a>
            </div>
            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/b-v-3.jpg') }} alt="">
                  </a>
            </div>
            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/c-v-1.jpg') }} alt="">
                  </a>
            </div>
            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/c-v-2.jpg') }} alt="">
                  </a>
            </div>
            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/c-v-3.jpg') }} alt="">
                  </a>
            </div>
            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/d-v-1.jpg') }} alt="">
                  </a>
            </div>
            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/d-v-2.jpg') }} alt="">
                  </a>
            </div>
            <div class="col-lg-4 col-md-3 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid" src={{ asset('storage/d-v-3.jpg') }} alt="">
                  </a>
            </div>
          </div>
          <div class="text-center mb-3"><img class="img-fluid" src={{ asset('storage/Loading_icon_vids.gif') }} alt=""></div>
</div>

        @include('frontend.pages.frontpage.footer')
@endsection
