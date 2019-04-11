@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-sm col-md-auto pb-3">
               <h1 class="c-6600cc">Where do I use REVid?</h1>
               <iframe width="435" height="245" src="https://www.youtube.com/embed/KgJkKSO751I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
           <div class="col-sm">
               <h1 class="c-6600cc pl-4">Online and Websites</h1>
                <ul class="list text-justify ml-4 line-height20">
                    <li>Upload your Video with Voice-over to the listing sites and online property for sale sites to further compliment the photos and enhance your online listings.</li>
                    <li>Upload to your company Website. Listings on a webpage receive up to a massive 42% increase in engagement compared to static text and images alone.</li>
                    <li>Coming soon <b>DriveBy</b> (free to members).</li>
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
