@extends('frontend.layouts.main')

@section('content')
    <div class="container help-content">
        <h3 class="border-title font-weight-bold mt-3">Need Help?</h3>
        <h3 class="color-6600cc">FAQ’s (Frequently Asked Questions)</h3>
        Top 10 FAQ’s
        <form class="form-horizontal register-form" method="POST" action="">
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="row m-r-l">
                        <div class="col-sm-7">
                            <select name="state" class="form-control font14">
                                <option>Question 1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit?</option>
                            </select>
                        </div>
                        <div class="col-sm pl-0">
                            <div class="d-flex flex-row-reverse">
                                <div><button type="submit" class="btn btn-primary bg-009900 btn-help btn-no-border b-radius-7"><b>GO</b></button></div>
                            </div>
                        </div>
              </div>
              <div class="row m-r-l my-4">
                        <div class="col-sm-7">
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
              <h3 class="color-6600cc mt-4">Call Me Back (next 24 hours)</h3>
              <div class="d-flex flex-row call-col">
                    <div class="align-self-center">Please Call</div>
                    <div><input id="name" type="text" class="form-control" name="name" placeholder="John Smith" required autofocus></div>
              </div>
              <div class="d-flex flex-row call-col my-3">
                    <div class="align-self-center">Mobile</div>
                    <div><input id="name" type="text" class="form-control" name="" required autofocus></div>
              </div>
              <div class="d-flex flex-row call-col my-3">
                    <div class="align-self-center">Best Time</div>
                    <div><input id="name" type="text" class="form-control" name="" required autofocus></div>
                    <div class="d-flex flex-row-reverse">
                       <div><button type="submit" class="btn btn-primary btn-6600cc"><b>CALL ME</b></button></div>
                    </div>  
              </div>
          </div>
        </form>
    </div>
@endsection