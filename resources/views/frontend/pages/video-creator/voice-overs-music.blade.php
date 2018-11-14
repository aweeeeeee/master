@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form pb-5">
                <div class="border-bot4 my-3">
                    <div class="font20 mb-3 color-414142"><b>Music Selection</b></div>
                    <div class="font16 color-303030"><b>SELECT MUSIC OPTIONS</b></div>
                    <div class="font14">Please select Your Music Options and nominated Music Tracks</div>
                </div>
                <div class="row mb-4 m-r-l font14">
                    <div class="col-sm-auto">
                        <div class="c0066ff font-weight-bold">RANDOM MUSIC</div>
                        <div>We Select <b>Random</b> Music <br>for <b>ALL</b> Your Videos</div>
                    </div>
                    <div class="col-sm-auto border-left-right-ccc">
                        <div class="mx-auto">
                            <div class="c0066ff font-weight-bold">ONE MUSIC TRACK</div>
                            <div>You Select the <b>Same</b> <br>Music for <b>ALL</b> Your Videos</div>
                        </div>
                    </div>
                    <div class="col-sm text-justify">
                        <div class="c0066ff font-weight-bold">ROTATED MUSIC TRACKS</div>
                        <div>You Select <b>Many</b> Music Tracks and they are <b>Rotated</b> for Your Videos</div>
                    </div>
                </div>
                <div class="color-404"><b>Select</b></div>
                <div class="row m-r-l">
                    <div class="col-sm-8 select-form">
                         <select name="state" class="col-11 form-control mt-2 mb-4">
                                    <option>Random Music</option>
                         </select>
                    </div>
                </div>
                <div class="row m-r-l">
                    <div class="col-sm">
                            <div class="d-flex flex-column">
                              <div>
                                  <div class="msc-ctg">
                                      <div class="d-flex flex-row py-2 px-2">
                                          <div><i class="music-icon m-i-chill"></i></div>
                                          <div class="align-self-center">
                                              <b>CHILLED AND AMBIENT</b>
                                              <div><a class="font11 v-s-text pl-0 collapsed" data-toggle="collapse" href="#collapse-C-A" role="button" aria-expanded="false" aria-controls="collapseGrant"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a></div>
                                          </div>
                                          <div class="align-self-center ml-auto text-center"><a class="collapsed" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><b>Click <br>to Select</b></a></div>
                                      </div>
                                      <div class="text-justify font12 collapse" id="collapse-C-A" style="">
                                          <p class="mx-3 mt-0 mb-3">data</p>
                                      </div>
                                  </div>
                                  <div class="msc-ctg-txt px-3 py-2 collapse" id="collapseExample" style="">
                                      <div class="d-flex justify-content-between">
                                        <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>Road Trip</b></div>
                                        <div><div class="msc-chck align-self-center">
                                                        <div class="custom-control custom-checkbox standard">
                                                                <input type="checkbox" class="custom-control-input" id="c-ambient">
                                                                <label class="custom-control-label" for="c-ambient"></label>
                                                        </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="d-flex justify-content-between my-2">
                                        <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>Silk</b></div>
                                        <div><div class="msc-chck align-self-center">
                                                        <div class="custom-control custom-checkbox standard ml-3">
                                                                <input type="checkbox" class="custom-control-input" id="silk">
                                                                <label class="custom-control-label" for="silk"></label>
                                                        </div>
                                             </div>
                                        </div>
                                      </div>
                                      <div class="d-flex justify-content-between">
                                        <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>Sun Spots</b></div>
                                        <div><div class="msc-chck align-self-center">
                                                        <div class="custom-control custom-checkbox standard ml-3">
                                                                <input type="checkbox" class="custom-control-input" id="sun-spots">
                                                                <label class="custom-control-label" for="sun-spots"></label>
                                                        </div>
                                             </div>
                                        </div>
                                      </div>
                                      <div class="d-flex justify-content-between my-2">
                                        <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>Ultramarine</b></div>
                                        <div><div class="msc-chck align-self-center">
                                                        <div class="custom-control custom-checkbox standard ml-3">
                                                                <input type="checkbox" class="custom-control-input" id="ultramarine">
                                                                <label class="custom-control-label" for="ultramarine"></label>
                                                        </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="d-flex justify-content-between">
                                        <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>World Online</b></div>
                                        <div><div class="msc-chck align-self-center">
                                                        <div class="custom-control custom-checkbox standard ml-3">
                                                                <input type="checkbox" class="custom-control-input" id="world-online">
                                                                <label class="custom-control-label" for="world-online"></label>
                                                        </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="d-flex justify-content-between my-2">
                                        <div class="align-self-center"><i class="voice-icon v-i-play"></i><b>Solar Groove</b></div>
                                        <div><div class="msc-chck align-self-center">
                                                        <div class="custom-control custom-checkbox standard ml-3">
                                                                <input type="checkbox" class="custom-control-input" id="solar-groove">
                                                                <label class="custom-control-label" for="solar-grove"></label>
                                                        </div>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div>
                                  <div class="d-flex flex-row msc-ctg py-2 px-2">
                                      <div><i class="music-icon m-i-clc"></i></div>
                                      <div class="align-self-center"><b>CLASSICAL</b></div>
                                      <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                      <div class="align-self-center ml-auto text-center"><a href=""><b>Click <br>to Select</b></a></div>
                                  </div>
                              </div>
                              <div>
                                  <div class="d-flex flex-row msc-ctg py-2 px-2">
                                      <div><i class="music-icon m-i-cntry"></i></div>
                                      <div class="align-self-center"><b>COUNTRY</b></div>
                                      <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                      <div class="align-self-center ml-auto text-center"><a href=""><b>Click <br>to Select</b></a></div>
                                  </div>
                              </div>
                              <div>
                                  <div class="d-flex flex-row msc-ctg py-2 px-2">
                                      <div><i class="music-icon m-i-dance"></i></div>
                                      <div class="align-self-center"><b>DANCE AND CLUB</b></div>
                                      <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                      <div class="align-self-center ml-auto text-center"><a href=""><b>Click <br>to Select</b></a></div>
                                  </div>
                              </div>
                              <div>
                                  <div class="d-flex flex-row msc-ctg py-2 px-2">
                                      <div><i class="music-icon m-i-easy"></i></div>
                                      <div class="align-self-center"><b>EASY LISTENING</b></div>
                                      <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                      <div class="align-self-center ml-auto text-center"><a href=""><b>Click <br>to Select</b></a></div>
                                  </div>
                              </div>
                              <div>
                                  <div class="d-flex flex-row msc-ctg py-2 px-2">
                                      <div><i class="music-icon m-i-funk"></i></div>
                                      <div class="align-self-center"><b>FUNK AND SOUL</b></div>
                                      <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                      <div class="align-self-center ml-auto text-center"><a href=""><b>Click <br>to Select</b></a></div>
                                  </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="d-flex flex-column">
                          <div>
                              <div class="d-flex flex-row msc-ctg py-2 px-2">
                                  <div><i class="music-icon m-i-jazz"></i></div>
                                  <div class="align-self-center"><b>JAZZ</b></div>
                                  <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                  <div class="align-self-center ml-auto text-center"><a href=""><b>Click <br>to Select</b></a></div>
                              </div>
                          </div>
                          <div>
                              <div class="d-flex flex-row msc-ctg py-2 px-2">
                                  <div><i class="music-icon m-i-lounge"></i></div>
                                  <div class="align-self-center"><b>LOUNGE AND GROOVE</b></div>
                                  <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                  <div class="align-self-center ml-auto text-center"><a href=""><b>Click <br>to Select</b></a></div>
                              </div>
                          </div>
                          <div>
                              <div class="d-flex flex-row msc-ctg py-2 px-2">
                                  <div><i class="music-icon m-i-pop"></i></div>
                                  <div class="align-self-center"><b>POP</b></div>
                                  <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                  <div class="align-self-center ml-auto text-center"><a href=""><b>Click <br>to Select</b></a></div>
                              </div>
                          </div>
                          <div>
                              <div class="d-flex flex-row msc-ctg py-2 px-2">
                                  <div><i class="music-icon m-i-rock"></i></div>
                                  <div class="align-self-center"><b>ROCK</b></div>
                                  <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                  <div class="align-self-center ml-auto text-center"><a href=""><b>Click <br>to Select</b></a></div>
                              </div>
                          </div>
                          <div>
                              <div class="d-flex flex-row msc-ctg py-2 px-2">
                                  <div><i class="music-icon m-i-upbeat"></i></div>
                                  <div class="align-self-center"><b>UPBEAT</b></div>
                                  <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                  <div class="align-self-center ml-auto text-center"><a href=""><b>Click <br>to Select</b></a></div>
                              </div>
                          </div>
                          <div>
                              <div class="d-flex flex-row msc-ctg py-2 px-2">
                                  <div><i class="music-icon m-i-hop"></i></div>
                                  <div class="align-self-center"><b>URBAN AND HIP HOP</b></div>
                                  <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                  <div class="align-self-center ml-auto text-center"><a href=""><b>Click <br>to Select</b></a></div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

