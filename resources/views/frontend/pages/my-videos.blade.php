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
           <h3 class="my-account-title mt-4 mb-3">My Videos</h3>
           <div class="border-bot7">
                <div class="d-flex justify-content-between select-form m-r-l mb-5 mt-5">
                    <div class="col">
                        <select name="" class="form-control color-ac" placeholder="Sort By">
                                <option disabled selected hidden>Sort By</option>
                        </select>
                    </div> 
                    <div class="col"><input type="text" name="" class="form-control search-input" Placeholder="Search"></div> 
               </div>
           </div>
           
         <div class="d-flex flex-column">
              <div class="my-2">
                  <div class="d-flex flex-row">
                      <div class="my-video-subcription border-999-2 px-1">
                                <div class="custom-control custom-checkbox premium d-inline-block margin-2">
                                                <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck5">
                                                <label class="custom-control-label font12" for="customCheck5"></label>
                                </div>
                      </div>
                      <div class="bg-424243 color-ffffff p-2 w-100">60 North Rd Basserdean WA 6054</div>
                  </div>
                    <div class="row">
                        <div class="col-md-auto pl-0"><img width="240" src="{{ asset('storage/account/my-video.jpg') }}" class="img-fluid"></div>
                        <div class="col-sm register-form pt-0">
                            <div class="row mt-0">
                                <div class="col-sm-7 p-0">
                                    <input type="text" name="" class="form-control" placeholder="XXXXX 12.12.2017">
                                </div>
                                <div class="col-sm pr-0"><button class="btn btn-primary w-100 h-100 btn-no-border"><b>DOWNLOAD</b></button></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 p-0">
                                    <select name="" class="form-control w-100" placeholder="Sort By">
                                            <option disabled selected hidden>Status - Active</option>
                                            <option>Active</option>
                                            <option>Archive</option>
                                    </select>
                                </div>
                                <div class="col-sm pr-0"><button class="btn btn-primary w-100 h-100 bg-009900 btn-no-border"><b>ACTIVE</b></button></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 p-0">
                                    <select name="" class="form-control w-100" placeholder="Sort By">
                                            <option disabled selected hidden>Format</option>
                                            <option>Full Screen</option>
                                            <option>Full Screen with Subtitles</option>
                                            <option>Framed</option>
                                            <option>Framed with Subtitles</option>
                                    </select>
                                </div>
                                <div class="col-sm pr-0"><button class="btn btn-primary w-100 h-100 bg-ff0033 btn-no-border"><b>DELETE</b></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-r-l">
                        <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-rev"></i></div>
                        <div class="col-sm">
                            <div>URL location</div>
                            <div><input type="text" name="" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row m-r-l">
                        <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-yt"></i></div>
                        <div class="col-sm">
                            <div>URL location</div>
                            <div><input type="text" name="" class="form-control"></div>
                        </div>
                    </div>
              </div>
              <div class="my-2">
                  <div class="d-flex flex-row">
                      <div class="my-video-subcription border-999-2 px-1">
                                <div class="custom-control custom-checkbox premium d-inline-block margin-2">
                                                <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck7">
                                                <label class="custom-control-label font12" for="customCheck7"></label>
                                </div>
                      </div>
                      <div class="bg-424243 color-ffffff p-2 w-100">60 North Rd Basserdean WA 6054</div>
                  </div>
                    <div class="row">
                        <div class="col-md-auto pl-0"><img width="240" src="{{ asset('storage/account/my-video.jpg') }}" class="img-fluid"></div>
                        <div class="col-sm register-form pt-0">
                            <div class="row mt-0">
                                <div class="col-sm-7 p-0">
                                    <input type="text" name="" class="form-control" placeholder="XXXXX 12.12.2017">
                                </div>
                                <div class="col-sm pr-0"><button class="btn btn-primary w-100 h-100 btn-no-border"><b>DOWNLOAD</b></button></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 p-0">
                                    <select name="" class="form-control w-100" placeholder="Sort By">
                                            <option disabled selected hidden>Status - Active</option>
                                            <option>Active</option>
                                            <option>Archive</option>
                                    </select>
                                </div>
                                <div class="col-sm pr-0"><button class="btn btn-primary w-100 h-100 bg-ff6600 btn-no-border"><b>ARCHIEVE</b></button></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 p-0">
                                    <select name="" class="form-control w-100" placeholder="Sort By">
                                            <option disabled selected hidden>Format</option>
                                            <option>Full Screen</option>
                                            <option>Full Screen with Subtitles</option>
                                            <option>Framed</option>
                                            <option>Framed with Subtitles</option>
                                    </select>
                                </div>
                                <div class="col-sm pr-0"><button class="btn btn-primary w-100 h-100 bg-ff0033 btn-no-border"><b>DELETE</b></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-r-l">
                        <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-rev"></i></div>
                        <div class="col-sm">
                            <div>URL location</div>
                            <div><input type="text" name="" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row m-r-l">
                        <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-yt"></i></div>
                        <div class="col-sm">
                            <div>URL location</div>
                            <div><input type="text" name="" class="form-control"></div>
                        </div>
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection
