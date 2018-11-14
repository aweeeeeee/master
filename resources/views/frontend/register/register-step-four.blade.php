@extends('frontend.layouts.main')

@section('content')
    <div class="container p-0" id="content">
        <h1 class="c-6600cc border-bot4">Let’s Get Started! Step 4</h1>
        
        @include('frontend.register.register-info')
        
        <div class="d-flex justify-content-between join-step-next p-1">
                <button class="btn btn-primary bg-333 btn-no-border px-4"><i class="arrow-left"></i> BACK</button>
        </div>
    </div>
    <div class="bg-eae step-two-register">
         <div class="container" id="content">
                <form class="register-form">
                   
                    @include('frontend.register.steps.payment-details')
                    
                    @include('frontend.register.steps.how-will-pay')
                    
                    @include('frontend.register.steps.agency-pay')
                    
                </form>
        </div>
    </div>
   
</div>
@endsection
