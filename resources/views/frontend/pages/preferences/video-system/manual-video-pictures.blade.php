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
            <h3 class="my-account-title mb-3">Manual Video System - Step 1</h3>
            <div class="border-bot5">
                @include('frontend.pages.preferences.video-system.steps')
            </div>
               <h5 class="color-414142 my-3"><b>Upload Your Pictures</b></h5>
               <div class="direct-upload-4">
                    <div class="d-flex justify-content-between mx-3 mb-2 mt-3">
                        <div class="d-u-width">
                            <button class="btn btn-primary b-radius-0 w-100 py-2"><i class="standard-video sv-browse"></i> Browse</button>
                            <div class="d-flex justify-content-between color-666 mt-2">
                                    <div>jpg or .png <br>size 200-600kb</div>
                                    <div>Minimum 10 <br>Maximum 25</div>
                            </div>
                        </div>
                        <div class="d-u-width-260 color-666">
                            <div class="d-flex align-items-start line-height20">
                                <div class="d-u-width">
                                        Estimated <br>Video Duration
                                </div>
                                <div class="d-u-width align-self-center d-u-border text-right pb-2">
                                    <h2 class="color-6600cc m-0"><b>00m:00s</b></h2>
                                    <h2 class="color-6600cc m-0"><b>00#</b></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-3">
                            <div class="story-board-block">
                                 <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property images</p>
                             </div>
                    </div>
               </div>
            <div class="d-flex flex-row-reverse text-right my-4">
                <div>
                    <button type="submit" class="btn btn-primary font-weight-bold join-step-next">
                               SAVE : Next Step 2 <i class="arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
