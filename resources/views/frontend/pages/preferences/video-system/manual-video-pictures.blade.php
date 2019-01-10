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
                <form>
                <h3 class="font-t-ms font16 color-424244 my-3"><b>Property Address</b></h3>
                <div class="row m-r-l">
                    <div class="col-sm-10">
                        <div class="d-flex flex-column register-form pt-2">
                            <div><input type="text" class="form-control" name="" placeholder="Address 1" required></div>
                            <div class="my-3"><input type="text" class="form-control" name="" placeholder="Address 2" required></div>
                            <div><input type="text" class="form-control" name="" placeholder="Suburb" required></div>
                            <div class="my-3">
                                 <div class="row m-r-l my-0">
                                     <div class="col-sm"><input type="text" class="form-control" name="" placeholder="State" required></div>
                                     <div class="col-sm-3"><input type="text" class="form-control" name="" placeholder="Post Code" required></div>
                                 </div>
                            </div>
                        </div>
                        <h3 class="font-t-ms font16 color-424244"><b>Property Features</b></h3>
                        <div class="d-flex flex-column register-form pt-2">
                            <div>
                                <div class="row m-r-l my-0">
                                    <div class="col-sm">
                                        <div class="d-flex flex-row">
                                            <div class="bg-eae px-2 pt-2"><i class="d-u-icon"></i></div>
                                            <input type="text" name="" class="form-control b-radius-0 ml-2 w-100" placeholder="Bedroom">
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                         <div class="d-flex flex-row">
                                             <div class="bg-eae p-2"><i class="d-u-icon d-u-icon-bat"></i></div>
                                             <input type="text" name="" class="form-control b-radius-0 ml-2 w-100" placeholder="Bathrooms">
                                         </div>
                                    </div>
                                    <div class="col-sm">
                                         <div class="d-flex flex-row">
                                             <div class="bg-eae p-2"><i class="d-u-icon d-u-icon-car"></i></div>
                                             <input type="text" name="" class="form-control b-radius-0 ml-2 w-100" placeholder="Cars">
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="register-form mb-3">
                                 <select name="suburb" class="form-control">
                                    <option disabled selected>Property Type</option>
                                    <option>House</option>
                                    <option>Unit</option>
                                    <option>Townhouse</option>
                                    <option>Villa</option>
                                    <option>Duplex</option>
                                    <option>Apartment</option>
                                    <option>Rural</option>
                                 </select>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <h3 class="font-t-ms font16 color-424244 my-3"><b>Upload Your Pictures</b></h3>
               <div class="direct-upload-4">
                    <div class="d-flex justify-content-between mx-3 mb-2 mt-3">
                        <div class="d-u-width">
                            <button class="btn btn-primary b-radius-0 w-100 py-2"><i class="standard-video sv-browse"></i> Browse</button>
                            <div class="d-flex justify-content-between color-666 mt-2">
                                    <div>.jpg or .png <br>size 200-600kb</div>
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
