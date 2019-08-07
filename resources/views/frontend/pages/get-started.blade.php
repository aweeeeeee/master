@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-md-auto">
               <h1 class="c-6600cc">Get Started Today!</h1>
               <a href=""><img class="img-fluid" src={{ asset('storage/get-started.jpg') }} /></a>
           </div>
           <div class="col-sm line-height20">
               <p class="text-justify m-0"><b>Set-up is done in 4 Easy Steps</b>. Once you have set-up your preferences and picked your selections - we are ready to make your Videos.</p>
               
                <div class="d-flex justify-content-between mt-3">
                    <div>
                         <ul class="list ml-4">
                            <li><b>Add your Details</b></li>  
                            <li class="mt-2"><b>Upload your Brand Images</b></li>
                         </ul>
                    </div>
                    <div>
                         <ul class="list ml-4">
                            <li><b>Set-Up your Templates and Selections</b></li>  
                            <li class="mt-2"><b>Choose your Preferences and Payment Options</b></li>
                         </ul>
                    </div>
                </div>
                <ul class="list ml-4">
                    <li class="text-justify"><b>Ready to Go</b>; you can start straight away and order your video productions. At any
                    time, you can update your templates, selections and preferences and options; Plus
                    track your progress and use the systems tools or options as and when needed.</li>
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
