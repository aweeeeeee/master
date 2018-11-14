<div class="container register-form @if (Request::segment(2) != '1') border-bot3 @endif">
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
         <h3 class="color-000">Add Your Details</h3>
         {{ csrf_field() }}
        <div class="row">
            <div class="col-sm">
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
                     @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">      
                      <input id="name" type="text" class="form-control" name="firstname" required autofocus placeholder="First Name">
                      @if ($errors->has('name'))
                           <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                           </span>
                      @endif
                 </div>
                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> 
                      <input id="name" type="text" class="form-control" name="lastname" required autofocus placeholder="Last Name">
                      @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                      @endif
                </div>
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="mobile" required autofocus placeholder="Mobile Telephone">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <select name="state" class="form-control">
                            <option>Position</option>
                    </select>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" Placeholder="Password" required>
                    @if ($errors->has('password'))
                         <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                         </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" Placeholder="Repeat Password" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group bg-eae">
                    <h3 class="m-0 py-2 font-t-ms px-3  ">Agency Details</h3>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">     
                    <select name="group" class="form-control">
                            <option>Select Group</option>
                    </select>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">     
                    <select name="group" class="form-control">
                            <option>Please Select Agency</option>
                    </select>
                </div>
                <div class="form-group">
                     <input id="name" type="text" class="form-control" name="" required="" autofocus="" placeholder="Address 1">
                </div>
                <div class="form-group">
                     <input id="name" type="text" class="form-control" name="" required="" autofocus="" placeholder="Address 2">
                </div>
                <div class="form-group">
                     <input id="name" type="text" class="form-control" name="" required="" autofocus="" placeholder="Suburb">
                </div>
                <div class="row">
                    <div class="col-sm-8 l-g-m"><input type="text" class="form-control" name="" placeholder="State" required=""></div>
                    <div class="col-sm l-g-m"><input type="text" class="form-control" name="" placeholder="Post Code" required=""></div>
                </div>
            </div>
        </div>
        @if (Request::segment(1) != 'pricing')
            @include('frontend.pages.pricing-data')
        @endif
        <div class="form-group">
                    <div class="text-right my-4">
                            <button type="submit" class="btn btn-primary font-weight-bold join-step-next">
                                NEXT: Your Template <i class="arrow-right"></i>
                            </button>
                    </div>
        </div> 
    </form>
</div>
