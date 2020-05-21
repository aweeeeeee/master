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
    <div class="pb-0">
        <h3 class="my-account-title mt-4 mb-3">Marketing Centre</h3>

        <div class="row mc-container">
            <div class="col-lg-6 col-7 mb-5">
                <div class="d-flex flex-row">
                  <div><img class="img-fluid h-100 w-100" src={{ asset('storage/mc-1.png') }} /></div>
                  <div class="bg-eae ml-2 p-2 font14">
                        <div class="d-flex flex-column">
                          <div>Description:</div>
                          <div class="my-2"><b>DriveBy Brochure</b></div>
                          <div><b>Generic</b></div>
                          <div class="my-2"><b>All Agency</b></div>
                          <div>Download:</div>
                          <div class="d-flex justify-content-between mt-2">
                                <div><a href=""><i class="ac-dl-icon ac-dl-pdf"></i></a></div>
                                <div><a href=""><i class="ac-dl-icon ac-dl-jpg"></i></a></div>
                          </div>
                        </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-7 mb-5">
                <div class="d-flex flex-row">
                  <div><img class="img-fluid h-100 w-100" src={{ asset('storage/mc-2.png') }} /></div>
                  <div class="bg-eae ml-2 p-2 font14">
                        <div class="d-flex flex-column">
                          <div>Description:</div>
                          <div class="my-2"><b>Vendor Brochure</b></div>
                          <div><b>Generic</b></div>
                          <div class="my-2"><b>All Agency</b></div>
                          <div>Download:</div>
                          <div class="d-flex justify-content-between mt-2">
                                <div><a href=""><i class="ac-dl-icon ac-dl-pdf"></i></a></div>
                                <div><a href=""><i class="ac-dl-icon ac-dl-jpg"></i></a></div>
                          </div>
                        </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-7 mb-5">
                <div class="d-flex flex-row">
                  <div><img class="img-fluid w-100 h-100" src={{ asset('storage/mc-4.png') }} /></div>
                  <div class="bg-eae ml-2 p-2 font14">
                        <div class="d-flex flex-column">
                          <div>Description:</div>
                          <div class="my-2"><b>Revid Brochure</b></div>
                          <div> &nbsp; </div>
                          <div class="my-2"> &nbsp; </div>
                          <div>Download:</div>
                          <div class="d-flex justify-content-between mt-2">
                                <div><a href=""><i class="ac-dl-icon ac-dl-pdf"></i></a></div>
                                <div><a href=""><i class="ac-dl-icon ac-dl-jpg"></i></a></div>
                          </div>
                        </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-7 mb-5">
                <div class="d-flex flex-row">
                  <div><img class="img-fluid w-100 h-100" src={{ asset('storage/mc-5.png') }} /></div>
                  <div class="bg-eae ml-2 p-2 font14">
                        <div class="d-flex flex-column">
                          <div>Description:</div>
                          <div class="my-2"><b>Using Your</b></div>
                          <div><b>7 Videos</b></div>
                          <div class="my-2"> &nbsp; </div>
                          <div>Download:</div>
                          <div class="d-flex justify-content-between mt-2">
                                <div><a href=""><i class="ac-dl-icon ac-dl-pdf"></i></a></div>
                                <div><a href=""><i class="ac-dl-icon ac-dl-jpg"></i></a></div>
                          </div>
                        </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-7 mb-5">
                <div class="d-flex flex-row">
                  <div><img class="img-fluid w-100 h-100" src={{ asset('storage/mc-6.png') }} /></div>
                  <div class="bg-eae ml-2 p-2 font14">
                        <div class="d-flex flex-column">
                          <div>Description:</div>
                          <div class="my-2"><b>Tips and Hints</b></div>
                          <div><b>When Using</b></div>
                          <div class="my-2"><b>Your Videos</b></div>
                          <div>Download:</div>
                          <div class="d-flex justify-content-between mt-2">
                                <div><a href=""><i class="ac-dl-icon ac-dl-pdf"></i></a></div>
                                <div><a href=""><i class="ac-dl-icon ac-dl-jpg"></i></a></div>
                          </div>
                        </div>
                  </div>
                </div>
            </div>
        </div>
 
    </div>
        </div>
    </div>
</div>
@endsection
