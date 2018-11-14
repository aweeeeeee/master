@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
      
        <div class="row">
           <div class="col-sm-12 col-md-auto pb-3">
               <h1 class="c-6600cc">Where do I use REVid?</h1>
               <a href=""><img class="img-fluid" src={{ asset('storage/where-use-revid.jpg') }} /></a>
           </div>
           <div class="col-sm">
            <h1 class="c-6600cc pl-4">Marketing</h1>
            <ul class="list text-justify ml-4 line-height21">
                <li>Now your <b>marketing program</b> can include a professional Video with
                    Voice-over. This could super-charge your online and social media
                    marketing results.</li>
                <li><b>Promotions</b> and <b>advertising</b> can be linked to the Video with Voice-over locations. Plus it is a value-proposition when pitching to <b>prospective vendors</b> for a new listing.</li>
                <li>Your <b>personal</b> and <b>agency brand</b> promotion is reinforced everytime your Video with Voice-over is viewed.</li>
                <li>Video with Voice-over is a vital tool to use in today’s <br>marketing environment.</li>
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
