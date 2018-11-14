@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form pb-5">
            <h3 class="my-account-title mb-2">My Preferences</h3>
            <form class="step-three-register register-form">
               
                @include('frontend.pages.preferences.preferences.surge')
                    
                @include('frontend.pages.preferences.preferences.email')
                    
                @include('frontend.pages.preferences.preferences.broadcast')
                
            </form>
        </div>
    </div>
</div>
@endsection
