@extends('frontend.layouts.main')

@section('content')
    <div class="container">
       <h3 class="border-bot5 font18 py-3">Reset Password</h3>
       @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="border-bot5 my-4">
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                    <div class="d-flex justify-content-center w-100 mb-5 r-password-form">
                        <div class="bg-eae px-3 py-2">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="">
                                            <input id="email" type="email" class="form-control b-radius-0" name="email" placeholder="Enter Email Address" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                            </div>     
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary b-border-0">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        
    </div>


@include('frontend.pages.frontpage.footer')

@endsection
