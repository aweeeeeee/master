@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <h2 class="header-border"><b>Make Video</b></h2>
        <div class="login-container p-3">
        <div class="row">
                <div class="col-sm-auto align-self-center">
                    <h3 class="color-6600cc font20"><b>Login or <br>Let’s Get Started! Step 1</b></h3>
                </div>
                <div class="col-sm">
                    <div class="text-justify color-000">
                            Existing users who have already set-up and
                            are ready to go please <b>LOGIN</b>. Otherwise,
                            Get Started Today! See <b>STEP 1</b> below and
                            set-up your details to order your Video.
                    </div>
                </div>
                <div class="col-sm">
                    <form class="" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control w-100 b-radius-0" name="email" value="{{ old('email') }}" Placeholder="Login" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                 @endif
                            </div>
                            <div class="d-flex justify-content-between">
                                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mb-0">
                                     <input id="password" type="password" class="form-control b-radius-0" name="password" Placeholder="Password"  required>

                                     @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                     @endif
                                     <div class="forgot-password">
                                        <a class="btn btn-link" href="">Forgot Password?</a>
                                     </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary bg-009900 btn-no-border b-radius-7"><b>GO</b></button>
                                </div>
                            </div>
                            
                    </form>
                </div>
        </div>
        </div>
        @include('frontend.pages.frontpage.video-form')
        
        @include('frontend.register.register-join-info')
        
        @include('frontend.register.register-info')
        
        @include('frontend.register.register-form')
        
    </div>
        @include('frontend.pages.frontpage.why-use-revid')

        @include('frontend.pages.frontpage.footer')
<script>
    $(document).ready(function(){
                $('[data-toggle="popover"]').popover();   
    });                     
</script>
@endsection

