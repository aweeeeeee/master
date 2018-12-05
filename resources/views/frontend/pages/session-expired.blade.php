@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">
        <h3 class="header-border color-666"><b>Session Expired</b></h3>
        <div class="border-bot5 mb-5 pb-5">
        <div class="col-6 mx-auto h-col-1">
            <div class="text-center my-3"><img class="img-fluid" src={{ asset('storage/session-expired.png') }} /></div>
            <form class="frontpage-login mt-2" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                        <h3><b>Your session has expired due to inactivity</b></h3>
                        <div class="color-666 font14 my-3">Please <b>Log In</b> to continue creating your next great REVid Video:</div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" Placeholder="Email Login" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                             @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                             <input id="password" type="password" class="form-control" name="password" Placeholder="Password"  required>

                             @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                             @endif
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center"><a href="" class="color-666">Forgot Password?</a></div>
                            <div><button type="submit" class="btn btn-primary"><b>GO</b></button></div>
                        </div>
            </form>
        </div>
        </div>
    </div>

    @include('frontend.pages.frontpage.footer')

@endsection
