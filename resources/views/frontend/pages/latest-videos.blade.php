@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">
        <h1>Latest Videos</h1>
        
        <div class="row mb-4">
            <div class="col"><a href=""><img src={{ asset('storage/a-v-1.jpg') }} class="img-fluid"></a></div>
            <div class="col"><a href=""><img src={{ asset('storage/a-v-2.jpg') }} class="img-fluid"></a></div>
            <div class="col"><a href=""><img src={{ asset('storage/a-v-3.jpg') }} class="img-fluid"></a></div>
        </div>
        
        <div class="row mb-4">
            <div class="col"><a href=""><img src={{ asset('storage/b-v-1.jpg') }} class="img-fluid"></a></div>
            <div class="col"><a href=""><img src={{ asset('storage/b-v-2.jpg') }} class="img-fluid"></a></div>
            <div class="col"><a href=""><img src={{ asset('storage/b-v-3.jpg') }} class="img-fluid"></a></div>
        </div>
        
        <div class="row mb-4">
            <div class="col"><a href=""><img src={{ asset('storage/c-v-1.jpg') }} class="img-fluid"></a></div>
            <div class="col"><a href=""><img src={{ asset('storage/c-v-2.jpg') }} class="img-fluid"></a></div>
            <div class="col"><a href=""><img src={{ asset('storage/c-v-3.jpg') }} class="img-fluid"></a></div>
        </div>
        
        <div class="row mb-4">
            <div class="col"><a href=""><img src={{ asset('storage/d-v-1.jpg') }} class="img-fluid"></a></div>
            <div class="col"><a href=""><img src={{ asset('storage/d-v-2.jpg') }} class="img-fluid"></a></div>
            <div class="col"><a href=""><img src={{ asset('storage/d-v-3.jpg') }} class="img-fluid"></a></div>
        </div>
        
        <div class="row text-center text-lg-left">

    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-3 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
          </a>
    </div>
  </div>
    </div>

        @include('frontend.pages.frontpage.footer')
@endsection
