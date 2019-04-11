@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-sm-12 col-md-auto pb-3">
               <h1 class="c-6600cc">Where do I use REVid?</h1>
               <iframe width="435" height="245" src="https://www.youtube.com/embed/KgJkKSO751I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
           <div class="col-sm">
                <h1 class="c-6600cc pl-4">Emails</h1>
                <ul class="list text-justify ml-4">
                    <li>Send the Video Links or the Video Files directly via email or use the <b>REVid Email</b> function to quickly send prospective buyers the Video with Voice-over.</li>
                    
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
