<div class="container f-page-info my-4">
    <h3 class="font-weight-bold mb-3">What Does REVid Cost?</h3>
    @if (request()->is('promotional'))
        <div class="d-flex flex-row-reverse">
            <div class="position-absolute">
                <img class="img-fluid" src={{ asset('storage/free-premium.png') }} />
            </div>
        </div>
    @endif
    <table cellpadding="0" cellspacing="0" border="0" class="premium-table w-100">
        <tr>
            <td>$99<sup>+gst</sup> per Property Listing</td>
            <td>
                <div class="d-flex justify-content-between pricing-data">
                    <div>Casual @ $0/month</div>
                    @if (!request()->is('/'))
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
                    @if (!request()->is('/'))
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
                <div>90 Seconds</div>
            </td>
            <td><b>Yes</b></td>
            <td><b>Yes</b></td>
        </tr>
        <tr>
            <td><b>Main Video in Agent Frame</b>
                <div>90 Seconds</div>
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
            <td><b>Refresh Video</b>
                <div>60 Seconds</div>
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
            <td><b>SOLD</b> (More Wanted) <b>Video</b>
                <div>40 Seconds</div>
            </td>
            <td><b>No, extra $20</b></td>
            <td><b>Yes</b></td>
        </tr>
        <tr>
            <td>One <b>FREE</b> Video
            <div>EVERY 3 Months</div></td>
            <td><b>No</b></td>
            <td><b>Yes</b> 
                @if (request()->is('promotional'))
                    <sup>(4)</sup> 
                @endif
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
     @if (request()->is('promotional'))
         <p class="text-justify font14 mt-4 color-000">
                <span class="color-ff0033">(1)</span> $99 (plus GST) = $108.90 including GST <span class="color-ff0033">(2)</span> Pricing valid until 31 Dec 2019.
             <span class="color-ff0033">(3)</span> FREE Premium OFFER is for 12 Months from initial set-up date and will NOT Auto-renew without consent. No lock-ins and no credit cards required. <span class="color-ff0033">(4)</span> Not included in FREE 12-months Premium offer.
         </p>
     @endif
</div>