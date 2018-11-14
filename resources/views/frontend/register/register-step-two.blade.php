@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">
        <h1 class="c-6600cc border-bot4">Let’s Get Started! Step 2</h1>
        
        @include('frontend.register.register-info')
        
        <div class="d-flex justify-content-between join-step-next p-1">
                <button class="btn btn-primary bg-333 btn-no-border px-3"><i class="arrow-left"></i> BACK</button>
        </div>
    </div>
    <div class="bg-eae step-two-register">
         <div class="container color-000" id="content">
                <form class="register-form">
                    @include('frontend.register.steps.pictures')

                    @include('frontend.register.steps.logo')

                    @include('frontend.register.steps.video-frame')

                    @include('frontend.register.steps.content-video-frame')
             
                    @include('frontend.register.steps.voice')
                    
                    @include('frontend.register.steps.music')
                </form>
        </div>
    </div>
   
</div>
@endsection
