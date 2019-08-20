<div class="container f-page-info my-4">
    <h3 class="font-weight-bold mb-3">What Does REVid Cost?</h3>

        <div class="d-flex flex-row-reverse">
            <div class="position-absolute">
                <img class="img-fluid" src={{ asset('storage/free-premium-v2.png') }} />
                <div class="my-2">
                    <img class="img-fluid" src={{ asset('storage/free-premium-info.png') }} />
                </div>
            </div>
        </div>

    <table cellpadding="0" cellspacing="0" border="0" class="premium-table w-100">
        <tr>
            <td>$99<sup>+gst</sup> per Property Listing</td>
            <td>
                <div class="d-flex justify-content-between pricing-data">
                    <div>Casual @ $0/month</div>
                    @if (!request()->is('/') && !request()->is('promotional') )
                        <div class="custom-control custom-checkbox mt-1">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label font-weight-bold" for="customCheck1"></label>
                        </div>
                    @endif
                </div>
            </td>
            <td>
                <div class="d-flex justify-content-between pricing-data">
                    <div>Premium @ $33/month</div>
                     @if (!request()->is('/') && !request()->is('promotional') )
                        <div class="custom-control custom-checkbox mt-1">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label font-weight-bold" for="customCheck2"></label>
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td><b>Main Video in Fullscreen</b>
                <div>Main60 + Upsize90</div>
            </td>
            <td><b>Yes</b></td>
            <td><b>Yes</b></td>
        </tr>
        <tr>
            <td><b>Main Video in Agent Frame</b>
                <div>Main60 + Upsize90</div>
            </td>
            <td><b>Yes</b></td>
            <td><b>Yes</b></td>
        </tr>
        <tr>
            <td><b>Voice-Over</b></td>
            <td><b>Yes</b></td>
            <td><b>Yes</b></td>
        </tr>
        <tr>
            <td><b>Subtitles</b></td>
            <td><b>Yes</b></td>
            <td><b>Yes</b></td>
        </tr>
        <tr>
            <td><b>Home Open Video</b>
                <div>40 Seconds</div>
            </td>
            <td><b>No, extra $20</b></td>
            <td><b>Yes</b></td>
        </tr>
        <tr>
            <td><b>Price Adjustment Video</b>
                <div>40 Seconds</div>
            </td>
            <td><b>No, extra $20</b></td>
            <td><b>Yes</b></td>
        </tr>
        <tr>
            <td><b>SOLD</b> (Another Wanted!) <b>Video</b>
                <div>40 Seconds</div>
            </td>
            <td><b>No, extra $20</b></td>
            <td><b>Yes</b></td>
        </tr>
        <tr>
            <td>One <b>FREE</b> Video
            <div>EVERY 3 Months</div></td>
            <td><b>No</b></td>
            <td><b>Yes</b><sup>(4)</sup> 

            </td>
        </tr>
        <tr>
            <td><b>Vendor Marketing Material</b>
                <div>(Brochure + Video)</div>
            </td>
            <td><b>Generic Only</b></td>
            <td><b>Personalised to Your Brand</b></td>
        </tr>
    </table>

         <p class="text-justify font14 mt-4 color-000">
                <span class="color-ff0033">(1)</span> $99 (plus GST) = $108.90 including GST <span class="color-ff0033">(2)</span> Pricing valid until 31 Dec 2019.
                <span class="color-ff0033">(3)</span> FREE Premium OFFER is for 12 Months from initial set-up date and will NOT Auto-renew without consent. No lock-ins and no credit cards required. <span class="color-ff0033">(4)</span> Not included in FREE 12-months Premium offer.
         </p>

</div>