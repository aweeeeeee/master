@extends('frontend.layouts.main')

@section('content')
    <div class="container p-0" id="content">
        <h1 class="c-6600cc border-bot4">Let’s Get Started! Step 3</h1>
        
        @include('frontend.register.register-info')
        
        <div class="d-flex justify-content-between join-step-next p-1">
                <button class="btn btn-primary bg-333 btn-no-border px-4"><i class="arrow-left"></i> BACK</button>
        </div>
    </div>
    <div class="bg-eae step-two-register mt-4">
         <div class="container" id="content">
                <form class="step-three-register register-form">
                    @include('frontend.register.steps.surge')

                    @include('frontend.register.steps.email')
                    
                    @include('frontend.register.steps.broadcast')
                </form>
        </div>
    </div>
   
</div>
@endsection
