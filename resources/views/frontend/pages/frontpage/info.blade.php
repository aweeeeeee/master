  <div class="container">
    <div class="f-page-info">
        <div class="row">
          <div class="col-lg">
            <h3 class="font-weight-bold mb-3">What is REVid?</h3>
              
            <p><b>Online Video System for Real Estate Agents</b></p>
              
            <p class="text-justify line-height22">
               All you need to do is paste the property URL from your agency’s website into the REVid online system and we take care of the rest, turning your property listings into a professional video that includes voice over, music and subtitles.  
            </p>
              
            <p><b>Video with Voice-Over and Subtitles</b></p>
                
            <p class="text-justify line-height22">
               You receive a photo-based video that includes voice-over, subtitles and music edited into a professional video production. We compile pre-recorded voice over tracks that have been selected to match the inclusion and features of your property. Using voice is an effective way of describing the property to viewers as they watch. It’s amazing how voice engages with your viewers and makes the video much more interesting and enjoyable.
            </p>
              
            <p><b>Images to Life with Your Personal Brand</b></p>
              
            <p class="text-justify line-height22">
               Your property images are bought to life using animation, movement and transition – to mimic actual video. It’s pretty close to the real thing because most property video recordings typically contain little movement. Each video uses your brand and image – and your contact details – integrating the promotion of property and agent to maximum effect.
            </p>
              
            
          </div>
          <div class="col-lg-auto h-latest-vid">
            <div class="d-flex flex-column">
              <div><h3 class="font-weight-bold mb-3">Latest Videos</h3></div>
              <div><img class="img-fluid" src={{ asset('storage/sample-thumb-1.jpg') }} /></div>
              <div class="mt-3"><img class="img-fluid" src={{ asset('storage/sample-thumb-2.jpg') }} /></div>
              <div class="mt-3 text-right"><a href="">More Latest Videos</a></div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-auto">
                <div class="d-flex flex-row m-icon-con">
                    <div class="align-self-center"><a href=""><i class="medium-icons m-fb"></i></a></div>
                    <div class="mx-2"><a href=""><i class="medium-icons m-instag"></i></a></div>
                    <div><a href=""><i class="medium-icons m-twtr"></i></a></div>
                    <div class="mx-2"><a href=""><i class="medium-icons m-ytb"></i></a></div>
                    <div><a href=""><i class="medium-icons m-in"></i></a></div>
                </div>
            </div>
            <div class="col-md">
                <p><b>Makes Real Estate Video Doable</b></p>
        
                <p class="text-justify line-height22">REVid is a <b>low cost doable solution</b> - quick and easy to achieve. You get many video formats, including subtitles, each designed to cover most online, social media and marketing applications.
                </p>
            </div>
        </div>
        <div class="fv-mobile text-center mt-3">
            <div class="border-ccc pt-2">
                <div class="row">
                    <div class="col-4 pr-0"><i class="link-icon2 li-v3-sites"></i></div>
                    <div class="col-auto align-self-center pl-0"><a href="/use-revid/website"><b>Online Sites</b></a></div>
                </div>
            </div>
            <div class="border-ccc pt-2 my-2">
                <div class="row">
                    <div class="col-4 pr-0"><i class="link-icon2 li-v3-social"></i></div>
                    <div class="col-auto align-self-center pl-0"><a href="/use-revid/social-media"><b>Social Media</b></a></div>
                </div>
            </div>
            <div class="border-ccc pt-2">
                <div class="row">
                    <div class="col-4 pr-0 pl-2"><i class="link-icon2 li-v3-pc"></i></div>
                    <div class="col-auto text-left line-height20 pl-0"><a href="/use-revid/corporate"><b>Presentations <br>and Corporate</b></a></div>
                </div>
            </div>
            <div class="border-ccc pt-2 my-2">
                <div class="row">
                    <div class="col-4 pr-0 pl-2"><i class="link-icon2 li-v3-office"></i></div>
                    <div class="col-auto text-left line-height20 pl-0"><a href="/"><b>Home Opens<br> Office Display</b></a></div>
                </div>
            </div>
            <div class="border-ccc pt-2">
                <div class="row">
                    <div class="col-4 pr-0 pl-2"><i class="link-icon2 li-v3-marketing"></i></div>
                    <div class="col-auto text-left line-height20 pl-0"><a href="/use-revid/marketing"><b>Marketing Email <br>Promotions</b></a></div>
                </div>
            </div>
        </div>  
        <div class="fv-web">
            <div class="row text-center f-use-revid-2 font-weight-bold mt-4">
                <div class="col-sm">
                    <i class="link-icon sites"></i>
                    <p class="m-0"><a href="/use-revid/website">Online<br>Sites</a></p>
                </div>
                <div class="col-sm">
                    <i class="link-icon social"></i>
                    <p class="m-0"><a href="/use-revid/social-media">Social<br>Media</a></p>
                </div> 
                <div class="col-sm">
                    <i class="link-icon pres"></i>
                    <p class="m-0"><a href="/use-revid/corporate">Presentations <br>and Corporate</a></p>
                </div>
                <div class="col-sm">
                    <i class="link-icon marketing"></i>
                    <p class="m-0"><a href="/use-revid/email">Marketing Email <br>Promotions</a></p>
                </div>
                <div class="col-sm">
                    <i class="link-icon office"></i>
                    <p class="m-0"><a href="/use-revid/marketing">Home Opens <br>Office Displays</a></p>
                </div>
                <div class="col-md-auto">
                     <img class="img-fluid" src={{ asset('storage/driveby-soon.jpg') }} />
                </div>
            </div>
        </div>
    </div>
    @if(Request::is('/')) 
        @include('frontend.pages.frontpage.revid-cost')
    @endif
<script>
    $(document).ready(function(){
                $('[data-toggle="popover"]').popover();   
    });                     
</script>
  </div>