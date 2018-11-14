@extends('frontend.layouts.main')

@section('content')
    <div class="container help-content">
        <h3 class="border-title font-weight-bold mt-3">Need Help?</h3>
        <h3 class="color-6600cc">FAQ’s (Frequently Asked Questions)</h3>
        Top 10 FAQ’s
        <form class="form-horizontal register-form form-live-chat" method="POST" action="">
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="row m-r-l">
                        <div class="col-sm-7">
                            <select name="state" class="form-control font14">
                                <option>Question 1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit?</option>
                            </select>
                        </div>
                        <div class="col-sm pl-0">
                            <div class="d-flex flex-row-reverse">
                                <div><button type="submit" class="btn btn-primary bg-009900 p-0-28 btn-no-border b-radius-7"><b>GO</b></button></div>
                            </div>
                        </div>
              </div>
              <div class="row m-r-l my-5">
                        <div class="col-sm-10">
                             <h3 class="color-6600cc pb-2">Email</h3>
                             <div><b>help@revid.com.au</b></div>
                        </div>
                        <div class="col-sm pl-0 align-self-center">
                             <div class="d-flex flex-row-reverse">
                                 <div><button type="submit" class="btn btn-primary btn-6600cc px-1 btn-no-border b-radius-7"><b>EMAIL</b></button></div>
                             </div>
                        </div>
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
                        <button type="submit" class="btn btn-primary bg-009900 btn-no-border b-radius-7 px-3"><b>SEND</b></button>
                    </div>  
                </div>
              </div>
              <h3 class="color-6600cc mt-4">Please telephone call me!</h3>
              <div class="d-flex flex-column">
                  <div>
                      <div class="d-flex flex-row">
                          <div class="pl-0 align-self-center">Please Call</div>
                          <div class="p-2 w-50"><input id="name" type="text" class="form-control" name="name" required autofocus></div>
                          <div class="p-2 align-self-center"><a href="" class="color-ff0033">Change</a></div>
                      </div>
                  </div>
                  <div class="py-2">or</div>
                  <div>
                      <div class="d-flex flex-row">
                          <div class="pr-4 align-self-center">Mobile</div>
                          <div class="pl-3 w-50"><input id="name" type="text" class="form-control" name="mobile" required autofocus></div>
                          <div class="px-3 align-self-center"><a href="" class="color-ff0033">Change</a></div>
                      </div>
                  </div>
                   <div class="text-right p-2">
                       <button type="submit" class="btn btn-primary btn-6600cc"><b>CALL</b></button>
                   </div>  
              </div>
          </div>
        </form>
    </div>
@endsection