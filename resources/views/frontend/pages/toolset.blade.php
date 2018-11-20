@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form pb-4">
            <h3 class="my-account-title">Toolset</h3>
            <div class="d-flex flex-column col-10 px-0">
                    <div><input type="text" class="form-control" name="" placeholder="Video #" required=""></div>
                    <div class="my-3"><input type="text" class="form-control" name="" placeholder="Address (short format)" required=""></div>
            </div>
            <h3 class="font-t-ms font16 color-424244 my-3"><b>Property Features</b></h3>
            <div class="d-flex flex-column col-10 px-0">
                            <div>
                                <div class="row m-r-l">
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
                            <div class="register-form">
                                 <select name="suburb" class="form-control">
                                    <option disabled="" selected="">Property Type</option>
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
                        <h3 class="font-t-ms font16 color-424244 my-3"><b>Picture Uploader</b></h3>
                        <div class="direct-upload-4">
                            <div class="d-flex justify-content-between mx-3 mb-2 mt-3">
                                <div class="d-u-width">
                                    <button class="btn btn-primary b-radius-0 w-100 py-2"><i class="standard-video sv-browse"></i> Browse</button>
                                    <div class="d-flex justify-content-between color-666 mt-2">
                                            <div>jpg or .png <br>size 200-600kb</div>
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
                       <h3 class="font-t-ms font16 color-424244 my-3"><b>Upload Property Description</b></h3>
                       <div class="direct-upload-3 d-flex flex-column p-4 mb-4">
                                        <div class="color-666 text-justify line-height20">This information is used to assist our video compilers choose professional voice over statements that best suit your property listing. We need the
                                        property description and information that tells us all about the features and benefits.</div>
                                        <div class="pt-2">
                                            <div class="row m-r-l">
                                                <div class="col-sm">
                                                    <div class="d-flex flex-column col-10 p-0">
                                                        <div class="pb-3"><button class="btn btn-primary b-radius-0 w-100 py-2"><i class="standard-video sv-browse"></i> Browse</button></div>
                                                        <div><i class="standard-video b-word"></i> Word or <i class="standard-video sv-pdf2"></i> PDF Format</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="story-board-block h-100">
                                                         <div>
                                                            <input type="file" multiple="">
                                                         </div>
                                                         <p class="color-666 mb-0">Drag and Drop File Here <span class="c-6600cc"><b>+</b></span></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                        </div>
                       <div class="d-flex justify-content-between">
                            <div><button class="px-5 btn btn-primary bg-6600cc btn-no-border b-radius-7 w-100 py-2"><i class="standard-video sv-save"></i> <b>SAVE</b></button></div>
                            <div><button class="btn btn-primary bg-009900 btn-no-border px-5 py-2 b-radius-7"><b>FINISHED</b></button></div>
                       </div>
        </div>
    </div>
</div>
@endsection