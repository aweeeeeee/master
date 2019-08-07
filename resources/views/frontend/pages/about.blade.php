@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">
        <div class="row">
            <div class="col-sm">
                <h1>About</h1>
                
                <p class="text-justify line-height24">We turn your property listings into Video with Voice-over. REVid is a NO
                FUSS Online System that makes it <b>Easy</b> (one-click ordering), <b>Fast</b> (from
                24 hrs) and <b>Lost Cost</b> to access professional Video for use in many
                applications and media.</p>
                
                <h1>What is REVid</h1>
                
                <h5 class="font16 c-6600cc"><b>System-Based NO Fuss</b></h5>
                
                <p class="text-justify line-height24">All you need to do is paste the property URL from your agency’s website
                into the REVid online system or if you prefer a higher resolution result,
                direct upload the images and description. We take care of the rest,
                turning your property listings into a professional video that includes
                voice-over, music and subtiles</p>
            </div>
            <div class="col-sm">
                <h1>What is REVid? Video</h1>
                <img class="img-fluid" src={{ asset('storage/revid-video3.jpg') }}>
                <div class="d-flex flex-row bg-ed contact-details p-3 mt-3">
                  <div class="align-self-center text-center"><b>Contact me</b></div>
                  <div>
                        <div class="row">
                            <div class="col-5">Telephone:</div>
                            <div class="col"><b>1300 100 111</b></div>
                        </div>
                        <div class="row">
                            <div class="col-5">Email:</div>
                            <div class="col"><span class="c-ff0033">info@revid.com.au</span></div>
                        </div>
                  </div>
                </div>
            </div>
        </div>
        
        <h5 class="font16 c-6600cc mb-4 sub-top-title"><b>Video with Voice Over</b></h5>
        
        <p class="text-justify line-height20">You receive a video that includes voice-over and, music and subtitles edited into a professional video production. We compile
        professionally pre-recorded voice over tracks that have been selected to match the inclusion and features of your property. Using
        voice is an effective way of describing the property to viewers as they watch. It’s amazing how voice engages with your viewers and
        makes the video much more interesting and enjoyable</p>
        
        <h5 class="font16 c-6600cc"><b>Images to Life</b></h5>
        
        <p class="text-justify line-height20">Your property images are bought to life using animation, movement and transition – to mimic actual video. It’s pretty close to the real
        thing because most property video recordings typically contain little movement. Each video uses your brand and image – and your
        contact details – integrating the promotion of property and agent to maximum effect.</p>
        
        <h5 class="font16 c-6600cc"><b>Makes Real Estate Video Doable + Great Value for Money!</b></h5>
        
        <p class="text-justify line-height20">REVid gives you a Fast, Low Cost and Easy solution. Yes, it’s not a fully directed film-crew production – it’s not meant to be – it’s a
        low cost doable solution – quick and easy to achieve. You also get 7 video formats, each designed and set-up to cover most online,
        social media and marketing applications. <b>It’s great value for money!</b></p>
        
        <div class="row bg-efefef col-border m-0">
            <div class="col-sm align-self-center">
                <div class="py-5">
                        <div class="d-inline-block"><i class="first-video-icon f-v-fast"></i></div>
                        <div class="d-inline-block">
                                <h4 class="m-0">Fast</h4>
                                <span class="font-tilium">From 2hrs</span>
                        </div>
                </div>
            </div>
            <div class="col-sm align-self-center">
                <div class="py-5">
                        <div class="d-inline-block"><i class="first-video-icon f-v-low"></i></div>
                                <div class="d-inline-block">
                                <h4 class="m-0">Low Cost</h4>
                                <span class="font-tilium">$99<sup>(1)</sup></span>
                        </div>
                </div>
            </div>
            <div class="col-sm align-self-center pl-0">
                 <div class="py-5">
                         <div class="d-inline-block"><i class="first-video-icon f-v-easy"></i></div>
                         <div class="d-inline-block">
                                <h4 class="m-0">Easy</h4>
                                <span class="font-tilium">One-click Ordering</span>
                         </div>
                 </div>
            </div>
            <div class="col-sm align-self-center">
                <img class="img-fluid" src={{ asset('storage/available_now.jpg') }}>
            </div>
        </div>
        
        <h1 class="my-3">Benefits of Video</h1>
        
        <div class="row col-border mx-0 my-3">
            <div class="col-sm p-0">
                <div class="text-center bg-efefef pb-2">
                    <i class="link-icon fast mb-2"></i>
                    <div class="b-v-text color-333"><b>Fast, Easy <br>and Low Cost</b></div>
                </div>
                
                <p class="text-justify p-3 mb-0 line-height20">Video works but has been difficult and expensive to make happen with only about 5% of properties listed using video at the moment.</p>
                <p class="text-justify px-3 mb-0 line-height20"><b>REVid</b> is Fast, Low Cost and Easy - your access to a doable solution.</p>
            </div>
            <div class="col-sm p-0">
                <div class="text-center bg-efefef pb-2">
                    <i class="link-icon buyers mb-2"></i>
                    <div class="b-v-text color-333"><b>Video <br>Engages</b></div>
                </div>
                <p class="text-justify p-3 mb-0 line-height20">Engage with your buyers using a video with a professional Voice-over – giving them 90 seconds of positive interaction that informs and interests.</p>
                <p class="text-justify px-3 mb-0 line-height20">Video with Voice works.</p>
            </div>
            <div class="col-sm p-0">
                <div class="text-center bg-efefef pb-2">
                    <i class="link-icon sell mb-2"></i>
                    <div class="b-v-text color-333"><b>Helps List <br>and Sell</b></div>
                </div>
                <p class="text-justify p-2 mb-0 line-height20">Video might help gain a property listing, and is a great marketing tool for your prospective vendors. Video is something your vendors can easily send to their own personal social media friends, family and business networks.</p>
            </div>
            <div class="col-sm p-0">
                <div class="text-center bg-efefef pb-2">
                    <i class="link-icon brand mb-2"></i>
                    <div class="b-v-text color-333"><b>Promotes <br>Your Brand</b></div>
                </div>
                <p class="text-justify p-3 mb-0 line-height20">Video strongly incorporates and promotes your personal identity and agency brand. This might help further boost your profile, including online and in social media channels.</p>
            </div>
        </div>
        <h1>What You Get on Premium (FREE for 12-months)</h1>
        <div class="row">
            <div class="col-sm">
                <div class="bg-efefef p-3">
                 
                    <h5 class="font16 c-6600cc"><b>Branded Video Productions</b></h5>
                    
                    For Desktop, Tablet or Smartphone
                    
                    <img class="img-fluid my-2" src={{ asset('storage/video-productions-v2.jpg') }}>
                    
                    Branded with your profile picture and details.
                </div>
                <div class="bg-efefef px-3 py-1 mt-4">
                    <h5 class="font16 c-6600cc"><b>Uploaded for Use</b></h5>
                    <div class="d-flex justify-content-between">
                            <div>
                               
                                <ul class="list-option-about">
                                    <li>REVid “My Videos”</li>
                                    <li>YouTube</li>
                                </ul>
                            </div>
                            <div>
                                <i class="a-s-icons a-s-icons-rev mr-3"></i>
                                <i class="a-s-icons a-s-icons-yt"></i>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm font-tilium">
                <div class="bg-efefef pt-3 pb-1 px-4 h-100">
                    <h3 class="Dark-title">Yes! All 7 Videos for $99+</h3>
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center"><b>Main60</b> (Agent Frame)</div>
                            <div><i class="frame-icon sixty-sec"></i></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center"><b>Main60</b> (Full-screen)</div>
                            <div><i class="frame-icon sixty-sec"></i></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center"><b>Upsize90</b> (Agent Frame)</div>
                            <div><i class="frame-icon ninety-sec"></i></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center"><b>Upsize90</b> (Full-screen)</div>
                            <div><i class="frame-icon ninety-sec"></i></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center">New Price</div>
                            <div><i class="frame-icon fourty-sec"></i></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center">Home Open</div>
                            <div><i class="frame-icon fourty-sec"></i></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center">It's Sold! (Another Wanted)</div>
                            <div><i class="frame-icon fourty-sec"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <h1 class="my-3">Where to Use Video</h1>
        
        <div class="row col-border m-0">
            <div class="col-sm p-0">
                <div class="text-center bg-efefef pb-2 h-row-1">
                    <i class="link-icon sites mb-2"></i>
                    <div class="b-v-text color-333"><b>Online <br>Sites</b></div>
                </div>
                <div class="py-3 pr-2">
                    <ul class="list-about line-height20">
                        <li>Video is an effective point-of-difference, increasingly expected and enjoyed by online users.</li>
                        <li>You can engage better with your prospective buyers when you deliver an audio-visual experience whilst exploring your online property listings.</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm p-0">
                <div class="text-center bg-efefef pb-2 h-row-1">
                    <i class="link-icon social mb-2"></i>
                    <div class="b-v-text color-333"><b>Social <br>Media</b></div>
                </div>
                <div class="p-3">
                    <ul class="list-about line-height20">
                        <li>Using video format on social media has become an easy and important method of getting the best results.</li>
                        <li>You can expand your influence on social media by using video to post on many different platforms through your own, your agency’s and most importantly your clients’ networks.</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm p-0">
                <div class="text-center bg-efefef pb-2 h-row-1">
                    <i class="link-icon pres mb-2"></i>
                    <div class="b-v-text color-333"><b>Presentations</b></div>
                    
                </div>
                <div class="p-3">
                    <ul class="list-about line-height20">
                        <li>Playing a video on your tablet, smartphone or laptop is a professional way of presenting your property listings.</li>
                        <li>You can show your prospective listing vendors how you present their property using a professional video with Voice-over. This might give them greater confidence in your marketing of their property.</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm p-0">
                <div class="text-center bg-efefef pb-2 h-row-1">
                    <i class="link-icon marketing mb-2"></i>
                    <div class="b-v-text color-333"><b>Marketing <br>Email <br>Promotions</b></div>
                </div>
                <div class="p-3">
                    <ul class="list-about">
                        <li>Embedding a video-link or attaching a video may help achieve better results in email, text and other promotions.</li>
                        <li>Video has become a valuable tool when used in the promotion of property on many different marketing platforms and is becoming increasingly more popular.</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm p-0">
                <div class="text-center bg-efefef pb-2 h-row-1">
                    <i class="link-icon office mb-2"></i>
                    <div class="b-v-text color-333"><b>Home Opens <br>Office Displays</b></div>
                </div>
                <div class="py-3 pl-1">
                    <ul class="list-about line-height20">
                        <li>Playing all your property listings during your Home Opens is a function our system provides you.</li>
                        <li>Your real estate office window’s electronic displays can be interesting and up-to-date showing video using sub-titles to promote your properties for both sales and the brand of agent and agency.</li>
                    </ul>
                </div>
            </div>
        </div>
        
        @include('frontend.register.register-join-info')
        
        @include('frontend.register.register-info')
        
        @include('frontend.register.register-form')
        
    </div>

        @include('frontend.pages.frontpage.footer')
    </div>
@endsection
