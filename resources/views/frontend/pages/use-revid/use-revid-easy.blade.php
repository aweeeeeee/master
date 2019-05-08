@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-sm col-md-auto pb-3">
               <h1 class="c-6600cc">Why Use REVid?</h1>
               <a href=""><img class="img-fluid" src={{ asset('storage/why-use-revid-easy.jpg') }} /></a>
           </div>
           <div class="col-sm">
                <h1 class="c-6600cc pl-4">Easy to Use</h1>
                <ul class="list text-justify ml-4 line-height24">
                    <li class="mb-0">It takes <b>4 steps to set-up</b> your video templates and select your preferences – then you are ready to go – all you need to do is login and order your video.</li>   
                    <li class="mb-0"><b>To Order your Video</b> – simply login and enter (or copy) the existing online property listing URL into the REVid System – <b>it really is <br>that easy</b>.</li>
                    <li class="mb-0"><b>Manage your Video Library</b> through the REVid System tools and functions – making it easy to track progress and apply Videos.</li>
                    <li class="mb-0"><b>Change</b> your templates and preference settings – using the My Preference and Explore functions.</li>
                </ul>
           </div>
        </div>
        @include('frontend.register.register-join-info')
        
        @include('frontend.register.register-info')
        
        @include('frontend.register.register-form')
        
    </div>
        @include('frontend.pages.frontpage.why-use-revid')

        @include('frontend.pages.frontpage.footer')
@endsection


