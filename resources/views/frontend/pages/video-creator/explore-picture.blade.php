@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form explore-pictures pb-5">
            
           <h3 class="my-account-title mb-3">Explore Pictures</h3>
           <div class="border-bot4">
                <div class="row main-title m-r-l color-414142">
                    <div class="col-sm">
                        <div class="align-self-center">
                            <div class="d-flex flex-row">
                                <div class="register-icon r-i-pictures mb-2"></div>
                                <div class="align-self-center font25 pl-3 font-t-ms"><b>Profile Photo</b></div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="text-justify">
                            <b>ADD YOUR PROFILE PHOTO</b>
                            <p class="mb-0">Please upload Your promotional head shot portrait photo here. This will be used in the Framed versions of Your Videos.</p>
                        </div>
                    </div>
               </div>
           </div>
           <div class="row m-r-l mt-4">
                <div class="col-sm reg-step-link">
                          <img class="img-fluid" src="{{ asset('storage/register/step-needed.jpg') }}">
                </div>
                <div class="col-sm text-justify align-self-center">
                          <p class="mb-0"><b>Recommended Format:</b></p>
                          <p>Portrait: 800 px wide x 800 px height pixels <br>.jpg or .png</p>
                          <p>Minimum 500 px width x 500 px height</p>
                </div>
            </div>
            <div class="border-bot4">
                <div class="row main-title color-414142 mt-5 m-r-l">
                    <div class="col-sm">
                        <div class="align-self-center">
                            <div class="d-flex flex-row">
                                <div class="register-icon r-i-logo mb-2"></div>
                                <div class="align-self-center font25 pl-3 font-t-ms"><b>Logo</b></div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-sm">
                         <div class="text-justify">
                            <b>ADD YOUR AGENCY LOGO</b>
                            <p class="text-justify mb-0 ws-5">Please upload your Agency logo here. This will be used in the Framed versions of Your Videos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-r-l mt-4">
                <div class="col-sm reg-step-link">
                        <img class="img-fluid" src="{{ asset('storage/register/step-blank.jpg') }}">
                </div>
                <div class="col-sm-6 align-self-center">
                        <p class="mb-0"><b>Recommended Format:</b></p>
                        <p class="mt-0">Logo: 2000 px width (min 1000 px width) <br>.jpg or .png</p>

                        <p>Maximum File Size 2MB</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
