@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        
        @include('frontend.pages.frontpage.revid-cost')
        
        @include('frontend.register.register-join-info')
        
        @include('frontend.register.register-info')

    </div>

    @include('frontend.register.register-form')

    @include('frontend.pages.frontpage.why-use-revid')

    @include('frontend.pages.frontpage.footer')

@endsection
