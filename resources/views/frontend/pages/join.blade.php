@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">
        <div class="border-bot4">
                <div class="row">
                  <div class="col-sm-8">
                      <h1 class="c-6600cc">How to Join? Video</h1>
                      <img class="img-fluid pt-4" src={{ asset('storage/how-to-join-video.jpg') }} ><br><br>
                  </div>
                  <div class="col-sm-4 text-center">
                      <h1 class="c-6600cc m-0">How to use REVid <br>in your business?</h1><br>
                      <a href=""><img class="img-fluid" src={{ asset('storage/get-started.jpg') }} /></a>
                      <div class="m-35-15">
                          <h1 class="c-6600cc m-0">How the system works?</h1>
                          (It’s easy)
                      </div>
                      <a href="/how-system-works-video"><img class="img-fluid pt-3" src={{ asset('storage/how-system-works.jpg') }} /></a>
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
