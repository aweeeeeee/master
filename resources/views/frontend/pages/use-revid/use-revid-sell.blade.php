@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-sm col-md-auto">
               <h1 class="c-6600cc">Why Use REVid?</h1>
               <a href=""><img class="img-fluid" src={{ asset('storage/why-sell-thumb.jpg') }} /></a>
           </div>
           <div class="col-sm">
                <h1 class="c-6600cc">Helps Sell</h1>
                <ul class="list text-justify ml-4 line-height20">
                    <li class="mb-1">The Voice-over tracks speak to your potential buyers when describing the property and presenting the Video. Your online property listing are complimented by adding Video with Voice-over.</li>
                    <li class="mb-1">It is easy and quick for potential buyers to watch your Video with Voice-over and look, see and hear about it – it makes a better connection than just pictures.</li>
                    <li class="mb-1">Video supports your brand and profile – and video supports formats like Social Media – which is becoming more important in the sales and branding process of selling.</li>
                    <li>Using <b>DriveBy</b> (coming soon in 2019) with is FREE for subscribers and gives you more value-added exposure for your property listing.</li>
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

