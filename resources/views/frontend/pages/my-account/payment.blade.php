<h3>Payment Details</h3>
<div class="border-bot7 pb-3">
    <form class="form-horizontal register-form pt-0" method="POST" action="">
         <div class="row my-3 m-r-l">
            <div class="col-lg">
                <h3 class="reg-title">Will you pay</h3>
            </div>
            <div class="col-lg step-three-register">
                <div class="custom-control custom-checkbox premium">
                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                    <label class="custom-control-label" for="customCheck10">Monthly Plan Costs ONLY</label>
                </div>
                <div class="custom-control custom-checkbox premium">
                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                            <label class="custom-control-label" for="customCheck11">Both Monthly Plan + Video/Extras Costs</label>
                </div>
            </div>
        </div>
        <div class="mt-2"><b>Method</b></div>
         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="row">
                <div class="col-9 pl-0">
                    <select class="form-control">
                            <option>Mastercard</option>
                    </select>
                </div>
                <div class="col-3 pl-1 align-self-center color-424244">Type</div>
            </div>
         </div>
         <div class="row">
                <div class="col-9 pl-0">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">      
                            <input id="name" type="text" class="form-control" name="" required autofocus placeholder="Card Number">
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                    </div>
                </div>
         </div>
        <div class="row account-payment mt-0">
            <div class="col-sm-9 pl-0">
                <div class="row mt-0 color-424244">
                    <div class="col-md-auto align-self-center">Expiration Date</div>
                    <div class="col-sm">
                        <select class="form-control">
                            <option>Jan</option>
                        </select>
                    </div>
                    <div class="col-sm-auto px-0 align-self-center color-424244">/</div>
                    <div class="col-sm">
                         <select class="form-control">
                            <option>2020</option>
                        </select>
                    </div>
                    <div class="col-md-auto align-self-center">CCV</div>
                    <div class="col-sm pr-0">
                         <input id="name" type="password" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>