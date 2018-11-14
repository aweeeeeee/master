@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title mb-3">Manual Video System - Step 3</h3>
            
            @include('frontend.pages.preferences.video-system.steps')
            <div class="d-flex justify-content-between join-step-next py-1 pb-3 mb-3 border-bot2">
                    <button class="btn btn-primary bg-333 btn-no-border px-4"><i class="arrow-left"></i> BACK</button>
            </div>
            <h3>Template Selection</h3>
            <div class="border-bot py-2">
                <div class="color-414142"><b>Main Frame</b></div>
                <div class="row">
                    <div class="col p-0"><img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="align-self-center"><a href="" class="d-inline-block color-666">&lt; Click to Expand &gt;</a></div>
                    <div class="p-2"><a href="">Change</a></div>
                </div>
            </div>
            <div class="color-414142"><b>End Frame</b></div>
            <div class="row">
                <div class="col p-0"><img src="{{ asset('storage/account/video-system-end-frame.jpg') }}" class="img-fluid"></div>
            </div>
            <div class="d-flex justify-content-between mt-2">
                    <div class="align-self-center"><a href="" class="d-inline-block color-666">&lt; Click to Expand &gt;</a></div>
                    <div class="p-2"><a href="">Change</a></div>
            </div>
            <div class="d-flex my-4">
              <div><button class="btn btn-primary bg-333 btn-no-border v-s-btn-t pl-4 pr-5"><i class="arrow-left mr-2"></i>BACK</button></div>
              <div class="ml-auto">
                  <button type="submit" class="btn btn-primary font-weight-bold join-step-next">
                               SAVE : Next Step 4 <i class="arrow-right"></i>
                  </button>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
