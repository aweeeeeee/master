<div class="border-bot4 pb-4">
    <div class="row">
        <div class="col-sm">
            <h4 class="reg-title my-3">Who Do We Invoice</h4>
            <div class="d-flex flex-column bd-highlight">
              <div><input id="name" type="text" class="form-control" name="" required autofocus placeholder="Entity or Name"></div>
              <div class="my-3"><input id="name" type="text" class="form-control" name="" required autofocus placeholder="ACN/ABN"></div>
              <div><input id="name" type="text" class="form-control" name="" required autofocus placeholder="Address 1"></div>
            </div>
        </div>
        <div class="col-sm">
            <h4 class="reg-title my-3">Payment Contact</h4>
            <div class="d-flex flex-column bd-highlight">
                <div><input id="name" type="text" class="form-control" name="" required autofocus placeholder="Contact Name"></div>
                <div class="my-3"><input id="name" type="text" class="form-control" name="" required autofocus placeholder="Contact Mobile"></div>
                <div><input id="name" type="email" class="form-control" name="" required autofocus placeholder="Email for Invoice"></div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-sm-6">
            <input id="name" type="text" class="form-control" name="" required autofocus placeholder="Address 2">
        </div>
    </div>
    <div class="row my-3">
        <div class="col-sm-6"><input type="text" class="form-control" name="" placeholder="Suburb" required></div>
        <div class="col-sm step-three-register">
                <div class="custom-control custom-checkbox premium">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label chck-a text-justify" for="customCheck5">I accept that should my nominated payment party decline to accept my
                    purchase invoice I will be liable for payment</label>
                </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-sm">
                <div class="row">
                        <div class="col-md-8"><input type="text" class="form-control" name="" placeholder="State" required></div>
                        <div class="col-md h-l-0"><input type="text" class="form-control" name="" placeholder="Post Code" required></div>
                </div>
        </div>
        <div class="col-sm">
            <div class="d-flex flex-row-reverse">
                <div>
                    <button type="button" class="btn btn-primary bg-009900 btn-no-border px-5 py-2 b-radius-7" data-toggle="modal" data-target="#exampleModal">Finish</button>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="d-flex justify-content-between join-step-next p-1">
            <button class="btn btn-primary bg-333 btn-no-border px-4" data-toggle="modal" data-target="#exampleModal"><i class="arrow-left"></i> BACK</button>
</div>
<div class="modal fade get-started-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row w-100">
            <div class="col-lg color-ff0033"><b>TERMS AND CONDITIONS : REVid Systems Pty Ltd</b></div>
            <div class="col-lg text-right">Effective Date: 01/06/2018</div>
        </div>
      </div>
      <div class="modal-body text-justify">
          
        @include('frontend.register.agreement.terms')
        
      </div>
    </div>
  </div>
</div>