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
            <h3 class="my-account-title">Premium Video Update Voice + Music</h3>
            <table class="table-action mb-4" cellpadding="0" cellspacing="0" width="100%">
                <tr class="bg-ccc font-weight-bold">
                    <td>Video #</td>
                    <td>Address</td>
                </tr>
                <tr>
                    <td>#XXXX</td>
                    <td>
                        <div class="d-flex">
                          <div>63 North Rd Bassendean</div>
                          <div class="ml-auto"><a href="">Return My Tracker</a></div>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="border-bot4 my-3">
                    <div class="font20 mb-3 color-414142"><b>Voice Selection</b></div>
                    <div class="font14 color-303030"><b>SELECT VOICE OPTIONS</b></div>
                    <div class="font14">Please select Your Voice Options and nominated Voice Talent.</div>
            </div>
            <div class="row mb-2 m-r-l font14">
                    <div class="col-sm-auto">
                        <div class="c0066ff font-weight-bold">RANDOM VOICE</div>
                        <div>We Select <b>Random</b> Voices <br>for <b>ALL</b> Your Videos</div>
                    </div>
                    <div class="col-sm-auto mx-auto border-left-right-ccc">
                        <div class="c0066ff font-weight-bold">SAME VOICE</div>
                        <div>You Select the <b>Same</b> Voice <br>for <b>ALL</b> Your Videos</div>
                    </div>
                    <div class="col-sm text-justify">
                        <div class="c0066ff font-weight-bold">ROTATED VOICE</div>
                        <div>You Select <b>Many</b> Voices and they are <b>Rotated</b> for Your Videos</div>
                    </div>
                </div>
                <div class="color-404 mt-4"><b>Select</b></div>
                <div class="row m-r-l">
                    <div class="col-sm-8 select-form">
                         <select name="" class="col-11 form-control mt-2 mb-4">
                                    <option>Random Voice</option>
                         </select>
                    </div>
                </div>
                <div class="row m-r-l">
                        <div class="col-sm">
                                <div class="d-flex justify-content-between mb-4">
                                        <div class="color-404"><b>Select Voice Overs</b></div>  
                                        <div class="color-0066ff font12 align-self-center"><b>OK to use</b></div>  
                                </div>
                                <div class="border-bot5">
                                        <div class="row m-r-l">
                                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/grant.jpg') }}"></div>
                                                <div class="col-sm-7 p-0">
                                                    <div class="d-flex justify-content-between my-2">
                                                            <div class="color-0066ff font12 pt-2 v-s-text"><b>GRANT</b></div>
                                                            <div class="color-0066ff font12 pt-2"><i class="voice-icon v-i-play"></i><b>Play Sample</b></div>
                                                            <div>
                                                                <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                    <div class="custom-control custom-checkbox standard ml-2">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                                        <label class="custom-control-label" for="customCheck6"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Professional, corporate, and "very now".</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseGrant" role="button" aria-expanded="false" aria-controls="collapseGrant"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-up"></i><i class="v-i-down"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseGrant">
                                                        With a background in commercial radio and broadcasting starting back in 1999, during which he took on announcing and audio production roles all around Australia, Grant is a voice actor with over 18 years’ experience, voicing daily for some of Australia’s biggest brands and labels.
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="border-bot5">
                                        <div class="row m-r-l">
                                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/luke.jpg') }}"></div>
                                                <div class="col-sm-7 p-0">
                                                    <div class="d-flex justify-content-between my-2">
                                                            <div class="color-0066ff font12 pt-2 v-s-text"><b>LUKE</b></div>
                                                            <div class="color-0066ff font12 pt-2"><i class="voice-icon v-i-play"></i><b>Play Sample</b></div>
                                                            <div>
                                                                <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                    <div class="custom-control custom-checkbox standard ml-2">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                                        <label class="custom-control-label" for="customCheck7"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Young, fresh, and warm.</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseLuke" role="button" aria-expanded="false" aria-controls="collapseGrant"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-up"></i><i class="v-i-down"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseLuke">
                                                        Luke is a talented voice over artist with a smooth and fresh-sounding voice. He is in his 20’s, which makes him perfect for both serious and light-hearted reads that require a younger-adult feel. Luke has done a range of different types of voice overs – from the answering messages of local businesses, to television spots for international clients.
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="border-bot5">
                                        <div class="row m-r-l">
                                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/mark.jpg') }}"></div>
                                                <div class="col-sm-7 p-0">
                                                    <div class="d-flex justify-content-between my-2">
                                                            <div class="color-0066ff font12 pt-2 v-s-text"><b>MARK</b></div>
                                                            <div class="color-0066ff font12 pt-2"><i class="voice-icon v-i-play"></i><b>Play Sample</b></div>
                                                            <div>
                                                                <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                    <div class="custom-control custom-checkbox standard ml-2">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                                        <label class="custom-control-label" for="customCheck8"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Friendly, mature, and smooth</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseMark" role="button" aria-expanded="false" aria-controls="collapseMark"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-up"></i><i class="v-i-down"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseMark">
                                                        Mark is a voice over artist with almost 30 years in the radio industry. You can hear Mark each morning on Perth’s 96fm. His voice over style is versatile, smooth, warm and friendly, and suits corporate, soft-sell, informative & training projects.
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm">
                                <div class="d-flex justify-content-between mb-4">
                                        <div class="color-404"><b>Select Voice Overs</b></div>  
                                        <div class="color-0066ff font12 align-self-center"><b>OK to use</b></div>  
                                </div>
                                <div class="border-bot5">
                                        <div class="row m-r-l">
                                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/karin.jpg') }}"></div>
                                                <div class="col-sm-7 p-0">
                                                    <div class="d-flex justify-content-between my-2">
                                                            <div class="color-0066ff font12 pt-2 v-s-text"><b>KARIN</b></div>
                                                            <div class="color-0066ff font12 pt-2"><i class="voice-icon v-i-play"></i><b>Play Sample</b></div>
                                                            <div>
                                                                <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                    <div class="custom-control custom-checkbox standard ml-2">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                                        <label class="custom-control-label" for="customCheck9"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Professional, corporate, and "very now".</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseKarin" role="button" aria-expanded="false" aria-controls="collapseKarin"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-up"></i><i class="v-i-down"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseKarin">
                                                        Karin’s mature, warm Australian voice has been heard on many Perth Television and Radio commercials and was a regular presenter on Channel 7 Perth’s long-running travel show, Home in WA. With 20 years’ experience across all forms of Media, Karin’s style ranges from corporate to casual and takes in voice-overs for TV, radio & cinema advertising, documentary and corporate video narration, on-hold messaging and live event hosting.
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="border-bot5">
                                        <div class="row m-r-l">
                                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/odette.jpg') }}"></div>
                                                <div class="col-sm-7 p-0">
                                                    <div class="d-flex justify-content-between my-2">
                                                            <div class="color-0066ff font12 pt-2 v-s-text"><b>ODETTE</b></div>
                                                            <div class="color-0066ff font12 pt-2"><i class="voice-icon v-i-play"></i><b>Play Sample</b></div>
                                                            <div>
                                                                <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                    <div class="custom-control custom-checkbox standard ml-2">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                                        <label class="custom-control-label" for="customCheck10"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Warm, familiar nature and mature.</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseOdette" role="button" aria-expanded="false" aria-controls="collapseOdette"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-up"></i><i class="v-i-down"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseOdette">
                                                        Odette has a velvety, warm voice with a soft Australian accent. She easily slips into accents and characters and is often asked to voice projects for global brands that require a distinctly “neutral” accent. She has been working as an actor and voice artist since graduating from The Victorian College Of The Arts in 1997. Some of her television and film credits include, Underbelly – Fat Tony and Co, Stingers, The Secret Life Of Us, City Homicide, Eugenie Sandler P.I, Little Deaths and The Book Of Revelation.
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="border-bot5">
                                        <div class="row m-r-l">
                                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/luisa.jpg') }}"></div>
                                                <div class="col-sm-7 p-0">
                                                    <div class="d-flex justify-content-between my-2">
                                                            <div class="color-0066ff font12 pt-2 v-s-text"><b>LUISA</b></div>
                                                            <div class="color-0066ff font12 pt-2"><i class="voice-icon v-i-play"></i><b>Play Sample</b></div>
                                                            <div>
                                                                <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                    <div class="custom-control custom-checkbox standard ml-2">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                                        <label class="custom-control-label" for="customCheck11"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Fresh, playful and energetic</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseLuisa" role="button" aria-expanded="false" aria-controls="collapseLuisa"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-up"></i><i class="v-i-down"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseLuisa">
                                                        Louisa has a bright, friendly and polished voice with a subtle Australian accent. She has been working as a voice over artist for ten years, and has voiced everything from instructional videos on how to teat-seal cows to sensual air-conditioning commercials. Recent clients include Coles, Domayne, University of Wollongong, Bendigo Bank, IGA, Harvey Norman, Bupa and News Corp Australia. You’ve probably heard her voice if you’ve ever been stuck on hold, as she has voiced dozens of phone systems for companies across Australia and New Zealand. Louisa’s speciality is long-form explainer and e-learning reads – with her clear and friendly tone and a hint of humour, she can make your product shine!
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="border-bot4 my-3">
                    <div class="font20 mb-3 color-414142"><b>Music Selection</b></div>
                    <div class="font14 color-303030"><b>SELECT MUSIC OPTIONS</b></div>
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
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-chill"></i></div>
                                          <div class="align-self-center"><b>CHILLED AND AMBIENT</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center"><a class="color-0066ff" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><b>Click <br>to Select</b></a></div>
                                      </div>
                                      <div class="collapse msc-ctg-txt px-3 py-2" id="collapseExample">
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
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-cntry"></i></div>
                                          <div class="align-self-center"><b>COUNTRY</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-dance"></i></div>
                                          <div class="align-self-center"><b>DANCE AND CLUB</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-easy"></i></div>
                                          <div class="align-self-center"><b>EASY LISTENING</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-funk"></i></div>
                                          <div class="align-self-center"><b>FUNK AND SOUL</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
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
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-lounge"></i></div>
                                          <div class="align-self-center"><b>LOUNGE AND GROOVES</b></div>
                                          <div class="align-self-center px-1"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-pop"></i></div>
                                          <div class="align-self-center"><b>POP</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-rock"></i></div>
                                          <div class="align-self-center"><b>ROCK</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-upbeat"></i></div>
                                          <div class="align-self-center"><b>UPBEAT</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex flex-row msc-ctg py-2 px-2">
                                          <div><i class="music-icon m-i-hop"></i></div>
                                          <div class="align-self-center"><b>URBAN AND HIP HOP</b></div>
                                          <div class="align-self-center px-2"><i class="voice-icon v-i-info"></i></div>
                                          <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div>
                                      </div>
                                  </div>
                            </div>
                        </div>
                    </div>
          </div>
    </div>
</div>
@endsection

