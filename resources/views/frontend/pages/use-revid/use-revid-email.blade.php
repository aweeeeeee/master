@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-sm-12 col-md-auto pb-3">
               <h1 class="c-6600cc">Where do I use REVid?</h1>
               <a href=""><img class="img-fluid" src={{ asset('storage/where-use-revid-email.jpg') }} /></a>
           </div>
           <div class="col-sm">
                <h1 class="c-6600cc pl-4">Emails</h1>
                <ul class="list text-justify ml-4">
                    <li>Send the Video Links or the Video Files directly via email or use the
                        <b>REVid Email</b> function to quickly send prospective buyers the Video with Voice-over.</li>
                    <li>Use the <b>Email Distribution</b> function to automatically distribute new
                        Videos to your prospects, clients and colleagues.</li>
                    <li>Use the <b>Broadcast</b> function to automatically send your latest Videos
                        in a weekly email to your fellow real estate agents in selected
                        surrounding areas.</li>
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
