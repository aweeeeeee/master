@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-sm col-md-auto pb-3">
               <h1 class="c-6600cc">Where do I use REVid?</h1>
               <a href=""><img class="img-fluid" src={{ asset('storage/where-use-revid-website.jpg') }} /></a>
           </div>
           <div class="col-sm">
               <h1 class="c-6600cc pl-4">Online and Websites</h1>
                <ul class="list text-justify ml-4 line-height20">
                    <li>Upload your Video with Voice-over to the listing sites and online
                        property for sale sites to further compliment the photos and enhance
                        your online listings.</li>
                    <li>Use the REVid service - <b>Upload to Websites</b> which is designed to make it easy for you as the REVid team uploads the completed REVid Video to the <b>online sites</b> or <b>websites</b> you have nominated</li>
                    <li>Use the REVid service - <b>Upload to Websites</b> which is designed to
                        make it easy for you as the REVid team uploads the completed
                        REVid Video to the <b>online sites</b> or <b>websites</b> you have nominated.</li>
                    <li>Coming soon (2019) available on <b>DriveBy</b> (free to members).</li>
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
