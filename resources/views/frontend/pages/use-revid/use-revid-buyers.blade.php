@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-sm col-md-auto pb-3">
               <h1 class="c-6600cc">Why Use REVid?</h1>
               <iframe width="435" height="245" src="https://www.youtube.com/embed/KgJkKSO751I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
           <div class="col-sm">
               <h1 class="c-6600cc pl-4">Engages Buyers</h1>
               <ul class="list text-justify ml-4 line-height20">
                   <li class="mb-2"><b>86%</b> of potential buyers use Online as the main tool to search for a property – making sure when they look at your property and genuinely engage is what Video can help you achieve.</li>
                   <li class="mb-2">Only <b>5%</b> of online property listing have Video and most of this is simple “walk-thru” without the professional voice-over tracks –STAND OUT – with an engaging REVid Video!</li>
                   <li class="mb-2"><b>Video with Voice-over</b> helps you connect and engage with potential buyers, giving you more value-added exposure for your listing</li>
                   <li class="mb-0"><b>Your brand and profile</b> is strongly promoted in Video, engaging with your potential clients further.</li>
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
