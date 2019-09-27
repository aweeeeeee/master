@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <h1>Marketing Centre</h1>
        <div class="row">
            <div class="col-lg-4 col-6 mb-5">
                <div class="d-flex flex-row">
                  <div><img class="img-fluid" src={{ asset('storage/mc-1.png') }} /></div>
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
            <div class="col-lg-4 col-6 mb-5">
                <div class="d-flex flex-row">
                  <div><img class="img-fluid" src={{ asset('storage/mc-2.png') }} /></div>
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
            <div class="col-lg-4 col-6 mb-5">
                <div class="d-flex flex-row">
                  <div><img class="img-fluid" src={{ asset('storage/mc-3.png') }} /></div>
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
            <div class="col-lg-4 col-6 mb-5">
                <div class="d-flex flex-row">
                  <div><img class="img-fluid" src={{ asset('storage/mc-4.png') }} /></div>
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
            <div class="col-lg-4 col-6 mb-5">
                <div class="d-flex flex-row">
                  <div><img class="img-fluid" src={{ asset('storage/mc-5.png') }} /></div>
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
            <div class="col-lg-4 col-6 mb-5">
                <div class="d-flex flex-row">
                  <div><img class="img-fluid" src={{ asset('storage/mc-6.png') }} /></div>
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

    @include('frontend.pages.frontpage.footer')

@endsection
