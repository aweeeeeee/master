<div class="container">
  <h3 class="header-border font-weight-bold">Join Today, and Receive 12-months FREE PREMIUM Package</h3>
    
  <p class="text-justify">As an introductory offer, be one of the few to receive a FREE PREMIUM service for the next 12-months. Valued at over @if (request()->is('/')) $790; @else $396; @endif this means
  you get @if(request()->is('/')) all @endif the benefits of PREMIUM at no extra 
          @if(request()->is('promotional'))
            cost<sup>(4)</sup>. 
          @else 
            cost.
          @endif 
      Limited Offer.</p>
  <div class="border-bot7 pb-4">
          <div class="row box-container line-height20">
            <div class="col-md-auto">
                <div><span class="text-medium">$99<sup>+gst</sup></span></div>
                <div>All 7 Videos include <span class="text-small">Voice-Over,</span></div>
                <div><span class="text-small">Subtitles</span> and <span class="text-small">Music.</span></div>
                <div class="box-block">
                    <a href="">
                            <div>
                                Personalised <br>Vendor Video
                            </div>
                    </a>
                    <a href="" class="mt-3">
                        <div>
                            Personalised <br>Vendor Brochure
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md">
                <span class="text-medium">Videos Included:</span>
                <div class="d-flex flex-row mt-2">
                  <div><a href="/"><img class="img-fluid" src={{ asset('storage/mv-4.png') }} /></a></div>
                  <div class="mx-3"><a href="/"><img class="img-fluid" src={{ asset('storage/rv-2.png') }} /></a></div>
                  <div><a href="/"><img class="img-fluid" src={{ asset('storage/hov-5.png') }} /></a></div>
                  <div class="mx-3"><a href="/"><img class="img-fluid" src={{ asset('storage/pav-2.png') }} /></a></div>
                  <div><a href="/"><img class="img-fluid" src={{ asset('storage/sv-1.png') }} /></a></div>
                </div>
            </div>
        </div>
  </div>
</div>