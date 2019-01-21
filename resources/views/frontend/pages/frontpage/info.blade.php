  <div class="container">
    <div class="f-page-info">
        <div class="row">
          <div class="col-lg">
            <h3 class="font-weight-bold mb-3">What is REVid?</h3>
            <p class="text-justify">
                <b>REVid turns your property listings into Video with Voice-Over</b>.<br>
                All you need to do is paste the property URL from your agency’s website into the REVid online system or if you prefer, direct upload the images and description. We take care of the rest, turning your property listings into a video that includes voice over and music.
            </p>
            <p class="text-justify">
                <b>Video with Voice Over</b> <br>
                You receive a photo-based video that  includes voice over and music edited into a professional video production. We compile professionally pre-recorded voice over tracks that have been  selected  to  match the inclusion and features of your property. Using voice is an effective way of describing the property to viewers as they watch. It’s  amazing  how voice engages with your viewers and makes the video much more interesting and enjoyable.
            </p>
          </div>
          <div class="col-lg">
            <h3 class="font-weight-bold mb-3">Sample REVid Video</h3>
            <img class="img-fluid" src={{ asset('storage/sample-thumb.jpg') }} />
          </div>
        </div>
        <p class="m-0"><b>Images to Life</b></p>
        <p class="text-justify">Your property images are bought to life using animation, movement and transition – to mimic actual video. It’s pretty close to the real thing because most property video recordings typically contain little movement. Each video uses your brand and image – and your contact details – integrating the promotion of property and agent to maximum  effect.</p>
        
        <p class="m-0"><b>Makes Real Estate Video Doable</b></p>
        <p class="text-justify">REVid gives you a Fast, Low Cost and Easy solution. Yes, it’s not a fully directed film-crew production – it’s not meant to be – <b>it’s a low cost doable solution</b> – quick and easy to achieve. The video production framework gives you options of 2-hour to 24-hour turn-around or the standard time of 2-3 days. You also get four video formats, including sub-titles, each designed and set-up to cover most online, social media and marketing applications. <b>It’s great value for money!</b></p>  

        <h3 class="f-t-bg mt-5"><b>Where Use REVid?</b></h3>
        
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
        @include('frontend.pages.frontpage.video-form')
    @endif
<script>
    $(document).ready(function(){
                $('[data-toggle="popover"]').popover();   
    });                     
</script>
  </div>