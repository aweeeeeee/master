@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-sm col-md-auto pb-3">
               <h1 class="c-6600cc">Why Use REVid?</h1>
               <iframe width="435" height="245" src="https://www.youtube.com/embed/KgJkKSO751I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
           <div class="col-sm">
                <h1 class="c-6600cc pl-4">Fast</h1>
                <ul class="list text-justify ml-4">
                    <li class="mb-0"><b>Normal</b> Video productions take between <b>2 to 3 days</b> maximum.</li>
                    <li><b>Compared to the alternative</b> of getting a film crew on-site, establishing directions, writing a script and having it recorded and then edited – <b>REVid is lighting FAST!</b></li>
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
