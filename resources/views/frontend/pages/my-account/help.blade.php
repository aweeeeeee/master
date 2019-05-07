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
                  <div class="row m-r-l my-4">
                        <div class="col-sm-10">
                             <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="color-6600cc pb-2">Email</h3>
                                    <div><b>help@revid.com.au</b></div> 
                                </div>
                                <div>
                                    <h3 class="color-6600cc pb-2">Telephone</h3>
                                    <div><b>1300 100 111</b></div> 
                                </div>
                             </div>
                        </div>
                  </div>
                  <h3 class="color-6600cc mt-5">Call Me Back (next 24 hours)</h3>
                  <div class="d-flex flex-row call-col-2">
                        <div class="align-self-center">Please Call</div>
                        <div><input id="name" type="text" class="form-control" name="name" placeholder="John Smith" required autofocus></div>
                  </div>
                  <div class="d-flex flex-row call-col-2 my-3">
                        <div class="align-self-center">Mobile</div>
                        <div><input id="name" type="text" class="form-control" name="" required autofocus></div>
                  </div>
                  <div class="d-flex flex-row call-col-2 my-3">
                        <div class="align-self-center">Best Time</div>
                        <div><input id="name" type="text" class="form-control" name="" required autofocus></div>
                  </div>
                  <div class="d-flex flex-row-reverse">
                        <div><button type="submit" class="btn btn-primary btn-6600cc"><b>CALL ME</b></button></div>
                  </div> 
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
