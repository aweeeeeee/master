@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        
        @include('frontend.pages.frontpage.revid-cost')
        
        <p class="text-justify font14 mt-4 color-000">
            <span class="color-ff0033">(1)</span> $99 (plus GST) = $108.90 including GST <span class="color-ff0033">(2)</span> Pricing valid until 31 Dec 2019.
            <span class="color-ff0033">(3)</span> FREE Premium OFFER is for 12 Months from initial
            set-up date and will NOT Auto-renew without consent.
        </p>
        
        @include('frontend.register.register-join-info')
        
        @include('frontend.register.register-info')

    </div>

    @include('frontend.register.register-form')

    @include('frontend.pages.frontpage.why-use-revid')

    @include('frontend.pages.frontpage.footer')

@endsection
