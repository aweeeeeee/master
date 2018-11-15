@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <div class="make-video-con">
            <h3 class="border-title">What is a Manual Video?</h3>
        </div>
            <div class="row m-0">
                <div class="col-sm-4 pl-0">
                    <div class="border-0066ff px-3 pt-4 pb-2 h-100">
                       <h5 class="color-0066ff mb-0 font20 font-t-ms px-3 mt-2"><b>What is a</b></h5>
                       <h5 class="color-0066ff mb-3 font20 font-t-ms px-2"><b>Manual Video</b></h5>

                        <p class="font-weight-bold text-justify line-height24 px-2">
                         If you are happy to spend the time, you use our system to select and match images to the Voice-over tracks and make the Video just like you want it.
                        </p>
                        <p class="font-weight-bold text-justify line-height24 px-2">
                         You get to make the decisions and we do the Video production work. It’s a bit more work from you than the Automatic Video and yet still Fast, Low Cost and Easy.
                        </p>
                        <div class="d-flex justify-content-start px-2 mt-5">
                            <div><img src={{ asset('storage/mv-logo.png') }} ></div>
                            <div class="c0066ff font-t-ms h-v-text align-self-center"><h5 class="color-0066ff"><b>You build <br>Your Video</b></h5></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-right-0">
                    
                     @include('frontend.pages.make-video.make-video-info') 
                    
                     <div class="row mt-4 bg-eae py-3 f-av-home border-top-0066ff">
                        <div class="col-lg-3 f-video-step">
                            <div class="d-flex align-items-start flex-column bd-highlight h-100">
                              <div class="pt-2 mb-auto bd-highlight"><h3 class="c0066ff font-t-ms"><b>Manual <br>Video</b></h3></div>
                              <div class="pb-2 bd-highlight">
                                    <div class="d-flex justify-content-start">
                                        <div><img src={{ asset('storage/mv-logo.png') }} ></div>
                                        <div class="c0066ff font-t-ms h-v-text align-self-center"><b>You build <br>Your <br>Video</b></div>
                                    </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg border-left-666 pr-5 register-form pl-3 pt-0">
                            <div class="d-flex flex-column">
                                <div class="font-t-ms color-414142 mb-2"><b>Manual Process</b></div>
                                <div><input type="text" class="form-control w-100 b-radius-0" placeholder="Address 1"></div>
                                <div class="my-3"><input type="text" class="form-control w-100 b-radius-0" placeholder="Address 2"></div>
                                <div><input type="text" class="form-control w-100 b-radius-0" placeholder="Suburb"></div>
                                <div class="row mt-3">
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control w-100 b-radius-0" placeholder="State">
                                    </div>
                                    <div class="col-lg h-l-0">
                                        <input type="text" class="form-control w-100 b-radius-0" placeholder="Post Code">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div class="align-self-center">
                                        <a tabindex="0" class="color-ff0033" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-html="true" data-content="
                                                    
                                                    <div class='color-303030 pl-2 my-2'><b>What Happens Next? (When you Press “GO”)</b></div>
                                                    <ol class='a-make-v-ol pl-4 pr-2 ol-0066ff text-justify color-000'>
                                                        <li>You go to a confirmation page which asks you to <b>Approve</b> the order;</li>  
                                                        <li>You get directed to the <b>Video Builder System</b> and start to compile
                                                        your Video by directly uploading the pictures and selecting the Voice-over script and voice and music features before passing it over to us;</li>
                                                        <li>Your Video is edited - with the images rendered to the Voice-over and music.</li>
                                                        <li><b>Your Video is Delivered.</b></li>
                                                    </ol>
                                                    
                                        " data-original-title="" title="">What Happens Next?</a>
                                    </div>
                                    <div><button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-4"><div class="px-2"><b>GO</b></div></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <div class="row mb-5 mt-3">
            <div class="col-sm-4 align-self-center">
                <a href=""><img class="img-fluid" src={{ asset('storage/m-v-manual.jpg') }} ></a>
            </div>
            <div class="col-sm-8">
                    <div class="m-13 my-4"><b>What Happens Next? (When you Press “GO”)</b></div>
                    <ol class="make-v-ol pl-2 m-0 ol-0066ff text-justify color-000">
                        <li>You go to a confirmation page which asks you to <b>Approve</b> the Order;</li>
                        <li>You get directed to the <b>Video Builder System</b> and start to compile your Video by directly uploading the pictures and selecting the Voice-over script and voice and music features before passing it over to us;</li>
                        <li>Your Video is edited - with the images rendered to the Voice-over and music.</li>
                        <li><b>Your Video is delivered.</b></li>
                    </ol>
            </div>
         </div>
         
        @include('frontend.register.register-join-info')
        
        @include('frontend.register.register-info') 
        
        @include('frontend.register.register-form') 

    </div>
        @include('frontend.pages.frontpage.why-use-revid')

        @include('frontend.pages.frontpage.footer')
@endsection