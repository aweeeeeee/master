@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="d-flex flex-column w-100 text-center">
          <div class="p-2"><img src={{ asset('storage/page-not-found-icon.png') }} /></div>
          <div class="color-333 mt-2"><span class="error-desc">Sorry…even the best developers have bad days…</span></div>
          <div class="color-333 mb-4"><span class="error-desc">Please click on the icons below for other pages you might like…</span></div>
          <div class="d-flex flex-row custom-menu align-self-center my-4">
           
                      <div>
                            <i class="menu-icon2 home"></i><br>
                            <a href="/">Home</a>
                      </div>
                      <div>
                            <i class="menu-icon2 about2"></i><br>
                            <a href="/about">About</a>
                      </div>
                      <div>
                            <i class="menu-icon2 join-today"></i><br>
                            <a href="/how-to-join">Join Today</a>
                      </div>
                      <div>
                            <i class="menu-icon2 pricing2"></i><br>
                            <a href="/pricing">Pricing</a>
                      </div>
                      <div>
                            <i class="menu-icon2 make-videos2"></i><br>
                            <a href="/lets-get-started/1">Make Video</a>
                      </div>
   
          </div>
        </div>
       
        
    </div>

        @include('frontend.pages.frontpage.footer')
    </div>
@endsection
