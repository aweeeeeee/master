@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <div class="make-video-con">
            <h3 class="border-title">What is a Custom Video</h3>
        </div>
        <div class="row m-0">
                <div class="col-sm-4 pl-0">
                    <div class="border-ff0033 px-4 pt-4 pb-3">
                       <h5 class="color-ff0033 font-t-ms mb-0"><b>What is a</b></h5>
                       <h5 class="color-ff0033 mb-3 font-t-ms"><b>Custom Video</b></h5>

                       <p class="font-weight-bold text-justify line-height22">
                        When the property is
                        special and you want to
                        spend more time and
                        money to make a ‘one-off’
                        Custom Video.
                       </p>
                       <p class="font-weight-bold text-justify line-height20">You get a professionally
                        written script that‘s
                        professionally recorded to
                        match your property.</p>
                       <p class="font-weight-bold text-justify line-height22 mb-0">
                       The Video is made to your requirements with more time and features - so it’s a very good production available for a reasonable Cost.</p>
                       <div class="d-flex justify-content-start">
                            <div><i class="make-video premium"></i></div>
                            <div class="color-ff0033 font-t-ms pl-3 align-self-center"><h5 class="color-ff0033 font-t-ms"><b>Fully Customised <br>Video</b></h5></div>
                       </div>
                    </div>
                </div>
                <div class="col-sm-8 col-right-0">
                    
                     @include('frontend.pages.make-video.make-video-info') 
                     <div class="row bg-eae py-2 border-top-ff0033">
                        <div class="col-sm-4">
                            <div class="d-flex align-items-start flex-column bd-highlight h-100">
                              <div class="pt-2 mb-auto bd-highlight make-my-video"><h3 class="color-ff0033 font-t-ms"><b>Custom <br>Video</b></h3></div>
                              <div class="pb-2 bd-highlight">
                                    <div class="d-flex justify-content-start">
                                        <div><i class="make-video premium"></i></div>
                                        <div class="color-ff0033 font-t-ms pl-3 align-self-center"><b>Fully <br>Customised <br>Video</b></div>
                                    </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm my-2 border-left-666">
                            <div class="d-flex flex-column register-form pt-0">
                                <div class="font-t-ms color-414142 mb-2"><b>Custom Process</b></div>
                                <div><input class="form-control w-100 b-radius-0" placeholder="Address 1" type="text"></div>
                                <div class="my-3"><input class="form-control w-100 b-radius-0" placeholder="Address 2" type="text"></div>
                                <div><input type="text" class="form-control w-100 b-radius-0" placeholder="Suburb"></div>
                                <div class="row my-3">
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control w-100 b-radius-0" placeholder="State">
                                    </div>
                                    <div class="col-lg h-l-0">
                                        <input type="text" class="form-control w-100 b-radius-0" placeholder="Post Code">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div class="align-self-center">
                                        <a tabindex="0" class="color-ff0033" data-container="body" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-html="true" data-content="
                                        <div class='color-303030 pl-2 my-2'><b>What Happens Next? (When you Press “GO”)</b></div>
                                              
                                            <ol class='a-make-v-ol pl-4 pr-2 ol-ff0033 text-justify color-000'>
                                                <li>You go to a confirmation page which asks you to <b>Approve</b> the order;</li>  
                                                <li>A <b>Customer Service Officer</b> will contact you to facilitate your customised Video. They will together with you and the team to develop your Video (It’s a one-on-one service) by compiling your personalised one-off script, Voice-over, any visual effects and other special on-screen content. <b>Your Custom Video production is made to 
                                                your requirements</b>;</li>
                                                <li><b>Your Video is Delivered.</b></li>
                                            </ol>
                                        
                                        " data-original-title="" title="">What Happens Next?</a></div>
                                    <div><button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-4"><div class="px-2"><b>GO</b></div></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm-4 align-self-center">
                    <a href=""><img class="img-fluid" src={{ asset('storage/m-v-custom.jpg') }} ></a>
                </div>
                <div class="col-sm-8">
                        <div class="m-13 my-4"><b>What Happens Next? (When you Press “GO”)</b></div>
                                <ol class="make-v-ol pl-2 m-0 ol-ff0033 text-justify color-000">
                                    <li>You go to a confirmation page which asks you to <b>Approve</b> the order;</li>
                                    <li>A <b>Customer Service Officer</b> will contact you to facilitate your customised Video. They will together with you and the team to develop your
                                    Video (It’s a one-on-one service) by compiling your personalised one-off script, voice-over, any visual effects and other special
                                    on-screen content. <b>Your Custom Video production is made to your requirements</b>;</li>
                                    <li><b>Your Video is Delivered.</b></li>
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