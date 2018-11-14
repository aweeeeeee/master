@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">
       
        <div class="row">
          <div class="col-sm-8 mb-3">
              <h1 class="c-6600cc mb-3">What is DriveBy? Video</h1>
              <div class="">
                   <img class="img-fluid pt-4" src={{ asset('storage/what-is-driveby2.jpg') }} />
              </div>
          </div>
          <div class="col-sm-4 text-center">
              <h1 class="c-6600cc m-0">How to join?</h1>
              (Get started today)
              <div class="mt-3">
                  <a href=""><img class="img-fluid" src={{ asset('storage/how-to-join.jpg') }} /></a>
                  <div class="m-35-0">
                         <h1 class="c-6600cc m-0">How the system works?</h1>
                         (It’s easy)
                  </div>
                  <a href="/how-system-works"><img class="img-fluid" src={{ asset('storage/how-system-works.jpg') }} /></a>
              </div>
          </div>
        </div>
        
        @include('frontend.register.register-join-info')
        
        @include('frontend.register.register-info')
        
        @include('frontend.register.register-form')
        
    </div>
        @include('frontend.pages.frontpage.why-use-revid')

        @include('frontend.pages.frontpage.footer')
    </div>
@endsection
