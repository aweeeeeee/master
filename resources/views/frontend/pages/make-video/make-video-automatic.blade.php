@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <div class="make-video-con">
            <h3 class="border-title">What is an Automatic Video</h3>
        </div>
            <div class="row m-0">
               <div class="col-sm-4 pl-0">
                    <div class="border-6600cc pricing-box px-4 py-2">
                       <div class="pricing-ribbon2"><span>MOST POPULAR</span></div>
                       
                       <h5 class="color-6600cc mb-0 font20 font-t-ms"><b>What is an</b></h5>
                       <h5 class="color-6600cc mb-3 font20 font-t-ms"><b>Automatic Video</b></h5>

                       <p class="font-weight-bold text-justify line-height20">
                            We do it all, and make your
                            Video using the images and
                            information in your online
                            property listing.
                        </p>
                        <p class="font-weight-bold text-justify line-height20">
                            Or you can Direct Upload the
                            property images and details
                            directly to the System.</p>
                        <p class="font-weight-bold text-justify line-height20 mb-0">
                            It’s a really great Video but it’s not a 'Hollywood’ production. With Voice-over, Vision and Music it covers the general property features and benefits. It’s Fast, Low Cost and Easy. </p>
                        <div class="d-flex justify-content-start mt-3">
                                <div><img class="img-fluid" src={{ asset('storage/av-logo.png') }}></div>
                                <div class="c-6600cc font-t-ms h-v-text align-self-center"><h5 class="color-6600cc font-t-ms font20"><b>We build <br>Your Video</b></h5></div>
                        </div>
                    </div>
                    <div class="mt-4"><a href=""><img class="img-fluid" src={{ asset('storage/m-v-auto.jpg') }} /></a></div>
                </div>
                <div class="col-sm-8 col-right-0">
                    
                     @include('frontend.pages.make-video.make-video-info') 
                     
                    <div class="row f-av-home border-top-6600cc bg-eae py-3">
                        <div class="col-lg-3 f-video-step">
                            <div class="d-flex align-items-start flex-column bd-highlight mb-3 h-100">
                              <div class="mb-1 p-2 bd-highlight"><h3 class="c-6600cc font-t-ms"><b>Automatic Video</b></h3></div>
                              <div class="mb-auto bd-highlight"><img class="img-fluid" src="{{ asset('storage/most-popular.png') }}"></div>
                              <div class="mb-1 bd-highlight">
                                    <div class="d-flex justify-content-start">
                                        <div><img class="img-fluid" src={{ asset('storage/av-logo.png') }} /></div>
                                        <div class="c-6600cc font-t-ms h-v-text align-self-center"><b>We build <br>Your <br>Video</b></div>
                                    </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg border-left-666 pr-5 register-form pl-3 pt-0">
                              <div class="color-414142 mb-1"><b>URL</b></div>
                              <div><input type="text" class="form-control w-100 b-radius-0" placeholder="URL here"></div>
                              <div class="d-flex justify-content-between my-2">
                                    <div class="align-self-center">
                                        <a tabindex="0" class="color-ff0033" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-html="true" data-content="

                                                    <div class='color-303030 pl-2 my-2'><b>What Happens Next? (When you Press “GO”)</b></div>
                                                    <ol class='a-make-v-ol pl-4 pr-2 ol-6600cc text-justify color-000'>
                                                        <li>You go to a confirmation page which asks you to <b>Approve</b> the order;</li>  
                                                        <li>The REVid team takes over and the URL location property images
                                                        and details are “Compiled” into your Video storyboard and your
                                                        Script is built;</li>
                                                        <li>Your Video is edited - with the images rendered to the Voice-over
                                                        and music.</li>
                                                        <li><b>Your Video is Delivered.</b></li>
                                                    </ol>

                                        ">What Happens Next?</a>
                                    </div>
                                    <div><button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-4"><div class="px-2"><b>GO</b></div></button></div>
                              </div>
                              <div class="text-center"><img class="img-fluid" src={{ asset('storage/or-v3.png') }} /></div>
                              <div class="color-414142 mb-2"><b>Direct Upload</b></div>
                              <div><input type="text" class="form-control w-100 b-radius-0" placeholder="Address 1"></div>
                              <div class="my-2"><input type="text" class="form-control w-100 b-radius-0" placeholder="Address 2"></div>
                              <div><input type="text" class="form-control w-100 b-radius-0" placeholder="Suburb"></div>
                              <div class="my-2">
                                 <div class="row">
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control w-100 b-radius-0" placeholder="State">
                                    </div>
                                    <div class="col-lg h-l-0">
                                        <input type="text" class="form-control w-100 b-radius-0" placeholder="Post Code">
                                    </div>
                                </div>
                              </div>   
                              <div class="d-flex justify-content-between mt-2">
                                    <div class="align-self-center">
                                        <a tabindex="0" class="color-ff0033" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-html="true" data-content="

                                                        <div class='color-303030 pl-2 my-2'><b>What Happens Next? (When you Press “UPLOAD”)</b></div>
                                                        <ol class='a-make-v-ol pl-4 pr-2 ol-6600cc text-justify color-000'>
                                                            <li>You go to a <b>Direct Upload</b> page which asks you to enter the
                                                            property information a description (word or pdf) and upload 10 to 25 images;</li>  
                                                            <li>You go to a confirmation page which asks you to <b>Approve</b> the order; The REVid team takes over and the property images and details
                                                            are ‘Compiled’ into your video storyboard and your Voice-over Script is built.</li>
                                                            <li>Your Video is edited - with images rendered to the Voice-over
                                                            and music.</li>
                                                            <li><b>Your Video is Delivered.</b></li>
                                                        </ol>

                                                    ">What Happens Next?</a>
                                    </div>
                                    <div><button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-4"><div class="px-2"><b>GO</b></div></button></div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row mb-5 mt-3">
            <div class="col-lg">
                <h3 class="c-6600cc font-t-ms font20 my-3"><b>URL</b></h3>
                <div class="pl-3">
                    <div class="m-13 mb-4"><b>What Happens Next? (When you Press “GO”)</b></div>
                    <ol class="make-v-ol pl-2 m-0 ol-6600cc text-justify color-000">
                        <li>You go to a confirmation page which asks you to <b>Approve</b> <br>the order;</li>
                        <li>The REVid team takes over and the URL location property images and details are “Compiled” into your Video storyboard and your Voice-over Script is built;</li>
                        <li>Your Video is edited - with the images rendered to the Voice-over and music.</li>
                        <li><b>Your Video is delivered</b>.</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg">
                <h3 class="c-6600cc font-t-ms font20 my-3"><b>Direct Upload</b></h3>
                <div class="pl-3">
                    <div class="m-13 mb-4"><b>What Happens Next? (When you Press “UPLOAD”)</b></div>
                    <ol class="make-v-ol pl-2 m-0 ol-6600cc text-justify color-000">
                        <li>You go to a <b>Direct Upload</b> page which asks you to enter the property information, a description (word or pdf) and upload 10 to 25 images;</li>
                        <li>You go to a confirmation page which asks you to <b>Approve</b> the order; The REVid team takes over and the property images and details are ‘Compiled’ into your video storyboard and your script is built.</li>
                        <li>Your Video is edited - with images rendered to the Voice-over and music.</li>
                        <li><b>Your Video is delivered</b>.</li>
                    </ol>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                        $('[data-toggle="popover"]').popover();   
            });                     
        </script>
        
        @include('frontend.register.register-join-info')
        
        @include('frontend.register.register-info') 
        
        @include('frontend.register.register-form') 
        
        </div>

        @include('frontend.pages.frontpage.why-use-revid')

        @include('frontend.pages.frontpage.footer')
@endsection