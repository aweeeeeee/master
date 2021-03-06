@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-sm col-md-auto pb-4">
               <h1 class="c-6600cc">Where do I use REVid?</h1>
               <a href=""><img class="img-fluid" src={{ asset('storage/where-use-revid-media.jpg') }} /></a>
           </div>
           <div class="col-sm">
            <h1 class="c-6600cc pl-4">Social Media</h1>
            <ul class="list text-justify ml-4">
                <li><b>Social Media</b> is a very important platform for <b>promoting your
                    brand and the listings</b> you have for sale.</li>
                <li>Video with Voice-over is the <b>preferred format</b> for <b>Social Media</b> and is becoming more important for <b>engagement and success</b>.</li>
                <li>REVid Video with Voice-over format (full screen with sub-titles) is <b>ideal for Social
                    Media platforms</b>.</li>
                <li>Today, your marketing program can include positive <b>Social Media</b>
                    interaction as <b>REVid gives you Easy, Fast and Low-Cost</b> solution.</li>
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
