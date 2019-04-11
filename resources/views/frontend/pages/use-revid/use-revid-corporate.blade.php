@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-sm-12 col-md-auto pb-3">
               <h1 class="c-6600cc">Where do I use REVid?</h1>
               <iframe width="435" height="245" src="https://www.youtube.com/embed/KgJkKSO751I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
           <div class="col-sm">
               <h1 class="c-6600cc pl-4">Corporate</h1>
                <ul class="list text-justify ml-4">
                    <li><b>Home Open Video Display</b> – you can use the function in REVid to download your Videos into a single presentation format – for use during Home Opens. Just download to USB and plug into most TV’s.</li>
                    <li><b>In-Office Video Display</b> – you can use the Video (with Subtitles) as a great In-office or Window Display.</li>
                    <li>You can use your <b>REVid library</b> as a tool to show prospective buyers your listings or the properties available for sale.</li>
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
