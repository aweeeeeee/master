@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form pb-5">
            @include ('frontend.pages.my-account.details')
            
            @include ('frontend.pages.my-account.agency')
            
            @include ('frontend.pages.my-account.subscription')
            
            @include ('frontend.pages.my-account.payment')
            
            @include ('frontend.pages.my-account.agency-info')
        </div>
    </div>
</div>
@endsection
