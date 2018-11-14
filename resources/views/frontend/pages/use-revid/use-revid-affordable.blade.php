@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-sm col-md-auto pb-3">
               <h1 class="c-6600cc">Why Use REVid?</h1>
               <a href=""><img class="img-fluid" src={{ asset('storage/why-use-revid-affordable.jpg') }} /></a>
           </div>
           <div class="col-sm">
               <h1 class="c-6600cc pl-4">Affordable</h1>
                 <ul class="list text-justify ml-4 line-height22">
                    <li><b>REVid productions are very affordable</b> <br>solutions to a professional Video with Voice-over.</li> 
                    <li><b>Subscription</b> Plans Video costs are:<br>
                        <div class="row mt-0">
                            <div class="col-sm-4"><b>- &nbsp; &nbsp; Auto Video</b></div>
                            <div class="col-sm">&nbsp; <b>$99</b> (including GST)</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"><b>- &nbsp; &nbsp; Manual Video</b></div>
                            <div class="col-sm"><b>$139</b> (including GST)</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"><b>- &nbsp; &nbsp; Custom Video</b></div>
                            <div class="col-sm"><b>$399</b> (including GST)</div>
                        </div>     
                    </li>
                    <li><b>Casual Access</b> is available with costs:<br>
                        <div class="row mt-0">
                            <div class="col-sm-4"><b>- &nbsp; &nbsp; Auto Video</b></div>
                            <div class="col-sm"><b>$149</b> (including GST)</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"><b>- &nbsp; &nbsp; Manual Video</b></div>
                            <div class="col-sm"><b>$199</b> (including GST)</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"><b>- &nbsp; &nbsp; Custom Video</b></div>
                            <div class="col-sm"><b>$399</b> (including GST)</div>
                        </div>    
                     
                     </li>
                </ul>
           </div>
        </div>
     
        @include('frontend.register.register-join-info')
        
        @include('frontend.register.register-info')
        
        @include('frontend.register.register-form')
        
    </div>
        @include('frontend.pages.frontpage.why-use-revid')

        @include('frontend.pages.frontpage.footer')
    </div>
@endsection

