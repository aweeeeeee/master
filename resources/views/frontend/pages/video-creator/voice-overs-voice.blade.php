@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form mb-5">
                <div class="border-bot4 my-3">
                    <div class="font20 mb-3 color-414142"><b>Voice Selection</b></div>
                    <div class="font16 color-303030"><b>SELECT VOICE OPTIONS</b></div>
                    <div class="font14">Please select Your Voice Options and nominated Voice Talent.</div>
                </div>
                <div class="row mb-2 m-r-l">
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
                <div class="color-404 mt-2"><b>Select</b></div>
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
                                        <div class="color-404"><b>Select Voice Talent</b></div>  
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
                                                                        <input checked type="checkbox" class="custom-control-input" id="customCheck6">
                                                                        <label class="custom-control-label" for="customCheck6"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Professional, corporate, and "very now".</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseGrant" role="button" aria-expanded="false" aria-controls="collapseGrant" class="test"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
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
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck7" checked>
                                                                        <label class="custom-control-label" for="customCheck7"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Young, fresh, and warm.</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseLuke" role="button" aria-expanded="false" aria-controls="collapseGrant"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
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
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseMark" role="button" aria-expanded="false" aria-controls="collapseMark"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseMark">
                                                        Mark is a voice over artist with almost 30 years in the radio industry. You can hear Mark each morning on Perth’s 96fm. His voice over style is versatile, smooth, warm and friendly, and suits corporate, soft-sell, informative & training projects.
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm">
                                <div class="d-flex justify-content-between mb-4">
                                        <div class="color-404"><b>Select Voice Talent</b></div>  
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
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck9"  checked="checked">
                                                                        <label class="custom-control-label" for="customCheck9"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Professional, corporate, and "very now".</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseKarin" role="button" aria-expanded="false" aria-controls="collapseKarin"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseKarin">
                                                        Karin’s mature, warm Australian voice has been heard on many Perth Television and Radio commercials and was a regular presenter on Channel 7 Perth’s long-running travel show, Home in WA.

                                                        With 20 years’ experience across all forms of Media, Karin’s style ranges from corporate to casual and takes in voice-overs for TV, radio & cinema advertising, documentary and corporate video narration, on-hold messaging and live event hosting.
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
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseOdette" role="button" aria-expanded="false" aria-controls="collapseOdette"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
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
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseLuisa" role="button" aria-expanded="false" aria-controls="collapseLuisa"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseLuisa">
                                                        Louisa has a bright, friendly and polished voice with a subtle Australian accent. She has been working as a voice over artist for ten years, and has voiced everything from instructional videos on how to teat-seal cows to sensual air-conditioning commercials. Recent clients include Coles, Domayne, University of Wollongong, Bendigo Bank, IGA, Harvey Norman, Bupa and News Corp Australia. You’ve probably heard her voice if you’ve ever been stuck on hold, as she has voiced dozens of phone systems for companies across Australia and New Zealand. Louisa’s speciality is long-form explainer and e-learning reads – with her clear and friendly tone and a hint of humour, she can make your product shine!
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

