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
            <h3 class="my-account-title mb-2 pb-3">My Preferences</h3>
            <div class="reg-title">HOMEOPEN info SETTINGS</div>
            <div class="d-flex flex-row step-three-register">
                <div class="col-md-5 px-0 py-3 font13">Register Your Attendance System</div>
                <div class="col-md">
                    <div class="d-flex flex-row">
                        <div class="align-self-center col-2 py-1">
                            On
                        </div>
                        <div class="custom-control custom-checkbox standard">
                            <input type="checkbox" class="custom-control-input" id="customCheckOn">
                            <label class="custom-control-label" for="customCheckOn"></label>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="align-self-center col-2 py-1">
                            Off
                        </div>
                        <div class="custom-control custom-checkbox standard pl-0">
                            <input type="checkbox" class="custom-control-input" id="customCheckOff">
                            <label class="custom-control-label" for="customCheckOff"></label>
                        </div>
                    </div>
                </div>
            </div>
            <form class="step-three-register register-form">
                    
                @include('frontend.pages.preferences.preferences.email')

            </form>
        </div>
    </div>
</div>
@endsection
