@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">
        <div class="border-bot4">
            <div class="row">
              <div class="col-sm-8 mb-3">
                  <h1 class="c-6600cc mb-3">How the System Works? Video</h1>
                  <div>
                       <img class="img-fluid pt-4" src={{ asset('storage/how-system-works-video.jpg') }} >
                  </div>
              </div>
              <div class="col-sm-4 text-center">
                  <h1 class="c-6600cc m-0">How to join?</h1>
                  (Get started today)
                  <div class="mt-3">
                      <a href="/how-to-join"><img class="img-fluid" src={{ asset('storage/how-to-join.jpg') }} /></a>
                      <div class="m-35-0">
                             <h1 class="c-6600cc m-0">How the system works?</h1>
                             (It’s easy)
                      </div>
                      <a href="/get-started"><img class="img-fluid" src={{ asset('storage/get-started.jpg') }} /></a>
                  </div>
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
