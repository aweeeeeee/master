@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title">Need Help</h3>
            <h3 class="color-6600cc">FAQ’s (Frequently Asked Questions)</h3>
            Top 10 FAQ’s
            <form class="form-horizontal register-form form-live-chat" method="POST" action="">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <div class="row m-r-l">
                        <div class="col-sm-10">
                            <select name="state" class="form-control font14">
                                <option>Question 1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit?</option>
                            </select>
                        </div>
                        <div class="col-sm pl-0"><button type="submit" class="btn btn-primary bg-009900 px-4 btn-no-border b-radius-7 w-100"><b>GO</b></button></div>
                  </div>
                  <div class="row m-r-l my-5">
                        <div class="col-sm-10">
                             <h3 class="color-6600cc pb-2">Email</h3>
                             <div><b>help@revid.com.au</b></div>
                        </div>
                        <div class="col-sm pl-0"><button type="submit" class="btn btn-primary btn-6600cc px-1 btn-no-border b-radius-7 w-100"><b>EMAIL</b></button></div>
                  </div>
                  <h3 class="color-6600cc">Online Live Chat</h3>
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} m-0">
                        <div class="textarea"></div>
                  </div>
                  <div class="row form-live-text py-3 m-0">
                    <div class="col-sm">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-0">      
                          <input id="name" type="text" class="form-control form-input-n-b" name="name" required autofocus placeholder="Start typing your message...">
                          @if ($errors->has('name'))
                               <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                               </span>
                          @endif
                       </div>  
                    </div>
                    <div class="col-sm">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary bg-009900 px-3 btn-no-border b-radius-7"><b>SEND</b></button>
                        </div>  
                    </div>
                  </div>
                  <h3 class="color-6600cc mt-5">Please telephone call me!</h3>
                  <div class="d-flex flex-column">
                      <div class="row m-r-l">
                            <div class="col-sm-2 align-self-center">Please Call</div>
                            <div class="col-sm"><input id="name" type="text" class="form-control" name="name" required autofocus></div>
                            <div class="col-sm-2 align-self-center text-center"><a href="">Change</a></div>
                      </div>
                      <div class="">or</div>
                      <div class="row m-r-l">
                            <div class="col-sm-2 align-self-center">Mobile</div>
                            <div class="col-sm"><input id="name" type="text" class="form-control" name="name" required autofocus></div>
                            <div class="col-sm-2 align-self-center text-center"><a href="">Change</a></div>
                      </div>
                  </div>
                  <div class="d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-primary btn-6600cc">CALL</button>
                  </div>  
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
