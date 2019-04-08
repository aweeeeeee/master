@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 make-video-con">
            <h3 class="border-title">Make My Video</h3>
            <div class="px-3 my-5 f-av-home register-form">
                        <div class="row border-top-10-6600cc bg-eae py-3">
                            <div class="col-sm-4">
                                <div class="d-flex align-items-start flex-column bd-highlight mb-3 h-100">
                                  <div class="mb-auto p-2 bd-highlight make-my-video"><h3 class="c-6600cc font-t-ms"><b>Automatic <br>Video</b></h3></div>
                                  <div class="bd-highlight">
                                        <div class="d-flex justify-content-start">
                                                <div><i class="make-video generic"></i></div>
                                                <div class="pl-3 align-self-center"><p class="color-6600cc mb-0"><b>We Build <br>your <br>Video</b></p></div>
                                        </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-sm border-left-666">

                                <div class="d-flex flex-column bd-highlight">
                                  <div class="color-414142 mb-1"><b>URL</b></div>
                                  <div><input type="text" class="form-control w-100 b-radius-0" placeholder="URL here"></div>
                                  <div class="d-flex justify-content-between my-2">
                                        <div class="align-self-center">
                                            <button type="submit" class="btn btn-primary b-radius-7 bg-c0c0c0 c-ff0033 btn-no-border"><div class="px-2"><b>ADD Comments</b></div></button>
                                        </div>
                                        <div><button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-4"><div class="px-2"><b>GO</b></div></button></div>
                                 </div>
                                  <div><img class="img-fluid" src={{ asset('storage/or-v2.png') }} /></div>
                                  <div class="color-414142 mb-2"><b>Direct Upload (for Hi-Res Image Upload)</b></div>
                                  <div><input type="text" class="form-control w-100 b-radius-0" placeholder="Address 1"></div>
                                  <div class="my-2"><input type="text" class="form-control w-100 b-radius-0" placeholder="Address 2"></div>
                                  <div>
                                     <div class="row">
                                           <div class="col-lg-5 pr-3">
                                                <input type="text" class="form-control w-100 b-radius-0" placeholder="Suburb">
                                           </div>
                                           <div class="col-lg-3 px-0 m-state">
                                               <input type="text" class="form-control w-100 b-radius-0" placeholder="State">
                                           </div>
                                           <div class="col-lg">
                                               <input type="text" class="form-control w-100 b-radius-0" placeholder="Post Code">
                                           </div> 
                                    </div>
                                  </div>   
                                  <div class="d-flex justify-content-between mt-2">
                                        <div class="align-self-center">
                                            <button type="submit" class="btn btn-primary b-radius-7 bg-c0c0c0 c-ff0033 btn-no-border"><div class="px-2"><b>ADD Comments</b></div></button>
                                        </div>
                                        <div><button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-4"><div class="px-2"><b>GO</b></div></button></div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    <div class="row mt-5 bg-eae py-2 border-top-10-0066ff">
                        <div class="col-sm-4">
                            <div class="d-flex align-items-start flex-column bd-highlight h-100">
                              <div class="pt-2 mb-auto bd-highlight make-my-video"><h3 class="c0066ff font-t-ms"><b>Manual <br>Video</b></h3></div>
                              <div class="pb-2 bd-highlight">
                                  <div class="d-flex justify-content-start">
                                        <div><i class="make-video standard"></i></div>
                                        <div class="pl-3 align-self-center">
                                             <p class="color-0066ff mb-0"><b>You build <br>Your <br>Video</b></p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm my-2 border-left-666">
                            <div class="d-flex flex-column">
                                <div class="font-t-ms color-414142 mb-2"><b>Manual Process</b></div>
                                <div><input type="text" class="form-control w-100 b-radius-0" placeholder="Address 1"></div>
                                <div class="my-3"><input type="text" class="form-control w-100 b-radius-0" placeholder="Address 2"></div>
                                <div class="row">
                                           <div class="col-lg-5 pr-3">
                                                <input type="text" class="form-control w-100 b-radius-0" placeholder="Suburb">
                                           </div>
                                           <div class="col-lg-3 px-0 m-state">
                                               <input type="text" class="form-control w-100 b-radius-0" placeholder="State">
                                           </div>
                                           <div class="col-lg">
                                               <input type="text" class="form-control w-100 b-radius-0" placeholder="Post Code">
                                           </div> 
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div class="align-self-center">
                                        <a tabindex="0" class="color-ff0033" data-container="body" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-html="true" data-content="
                                                    
                                                    <div class='color-303030 pl-2 my-2'><b>What Happens Next? (When you Press “GO”)</b></div>
                                                    <ol class='a-make-v-ol pl-4 pr-2 ol-0066ff text-justify color-000'>
                                                        <li>You go to a confirmation page which asks you to <b>Approve</b> the order;</li>  
                                                        <li>You get directed to the <b>Video Builder System</b> and start to compile
                                                        your Video by directly uploading the pictures and selecting the Voice-over script and voice and music features before passing it over to us;</li>
                                                        <li>Your Video is edited - with the images rendered to the Voice-over and music.</li>
                                                        <li><b>Your Video is Delivered.</b></li>
                                                    </ol>
                                                    
                                        ">What Happens Next?</a>
                                    </div>
                                    <div><button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-4"><div class="px-2"><b>GO</b></div></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 bg-eae py-2 border-top-10-ff0033">
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
                            <div class="d-flex flex-column">
                                <div class="font-t-ms color-414142 mb-2"><b>Custom Process</b></div>
                                <div><input type="text" class="form-control w-100 b-radius-0" placeholder="Address 1"></div>
                                <div class="my-3"><input type="text" class="form-control w-100 b-radius-0" placeholder="Address 2"></div>
                                <div class="row">
                                           <div class="col-lg-5 pr-3">
                                                <input type="text" class="form-control w-100 b-radius-0" placeholder="Suburb">
                                           </div>
                                           <div class="col-lg-3 px-0 m-state">
                                               <input type="text" class="form-control w-100 b-radius-0" placeholder="State">
                                           </div>
                                           <div class="col-lg">
                                               <input type="text" class="form-control w-100 b-radius-0" placeholder="Post Code">
                                           </div> 
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div class="align-self-center">
                                        <a tabindex="0" class="color-ff0033" data-container="body" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-html="true" data-content="
                                        <div class='color-303030 pl-2 my-2'><b>What Happens Next?</b></div>
                                              
                                            <div class='color-303030 pl-2 my-2'><b>What Happens Next? (When you Press “GO”)</b></div>
                                              
                                            <ol class='a-make-v-ol pl-4 pr-2 ol-ff0033 text-justify color-000'>
                                                <li>You go to a confirmation page which asks you to <b>Approve</b> the order;</li>  
                                                <li>A <b>Customer Service Officer</b> will contact you to facilitate your customised Video. They will together with you and the team to develop your Video (It’s a one-on-one service) by compiling your personalised one-off script, Voice-over, any visual effects and other special on-screen content. <b>Your Custom Video production is made to 
                                                your requirements</b>;</li>
                                                <li><b>Your Video is delivered.</b></li>
                                            </ol>
                                        
                                        ">What Happens Next?</a></div>
                                    <div><button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-4"><div class="px-2"><b>GO</b></div></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
    </div>
    <script>
                     $(document).ready(function(){
                            $('[data-toggle="popover"]').popover();   
                     });                     
                    </script>
</div>
@endsection
