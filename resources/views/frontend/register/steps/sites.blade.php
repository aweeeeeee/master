<h3 class="col-8 pl-0 mt-5">Sites</h3>
<div class="d-flex flex-row">
    <div class="reg-title pr-2">UPLOAD TO WEBSITES</div>
    <div class="align-self-center"><a class="c0066ff" data-toggle="collapse" href="#Expanded10" role="button" aria-expanded="false" aria-controls="collapseExample">What is this?</a></div>
</div>
<div class="collapse rules-contents @if (Request::segment(1) != 'account') {{'col-sm-8 pl-0'}} @endif" id="Expanded10">
    <div class="rules-arrow3"></div>
    <div class="ExpandForm text-justify bg-fff mb-3 @if (Request::segment(1) != 'account') {{'p-3'}} @endif"> 
        <b>What is Upload to Websites?</b>
        
        <p class="mt-2"><b>Upload to Websites</b> is a service provided on request. It is designed to make it easy for you
        to immediately put the REVid Video to work. On your behalf, the REVid team uploads the
        completed REVid Video to the websites you have nominated.</p>
        <p>This is a value-added service and a fee applies.</p>
        <p>Permission, details and login credentials are required for us to perform this service</p>
    </div>           
</div>
<div class="row mt-4 @if (Request::segment(1) != 'account') {{'col-8'}} @endif pl-0 my-2">
    <div class="col-sm-6 @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
         <select name="state" class="form-control font-weight-bold">
             <option>RealEstate.com.au</option>
         </select>
    </div>
    <div class="col-md-auto reg-step-link align-self-center">
        <a data-toggle="collapse" href="#Expanded1" role="button" aria-expanded="false" aria-controls="collapseExample"><span>Set Rules</span></a>
    </div>
</div>
<div class="collapse rules-contents @if (Request::segment(1) != 'account') {{'col-8 pl-0'}} @endif" id="Expanded1">
    <div class="rules-arrow"></div>
    <div class="ExpandForm @if (Request::segment(1) != 'account') {{'p-3'}} @endif"> 
      <div class="row mt-3">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">URL Address</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">A/c Owner</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">Login</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="password" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">Password</div>
      </div>
      <div class="d-flex flex-row-reverse">
            <div class="p-2"><a href="">What is this?</a></div>
      </div>
      <div class="row mb-3 border-top-999 pt-3 mt-0">
            <div class="col-sm-9">
                <textarea name="" class="form-control" placeholder="Instructions or comments"></textarea>
            </div>
            <div class="col-sm-3 align-self-center">
                We Authorised <br>REVid to Action
                <div><a href="">Terms and Conditions</a></div>
                <button class="btn btn-primary bg-ff0033">AUTHORISE</button>
            </div>
      </div>
    </div>           
</div>


<div class="row @if (Request::segment(1) != 'account') {{'col-8'}} @endif pl-0">
     <div class="col-sm @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
            <div class="custom-control custom-checkbox standard">
                <input type="checkbox" class="custom-control-input" id="customCheck4">
                <label class="custom-control-label" for="customCheck4">Always Upload</label>
            </div>
     </div>
     <div class="col-sm">
            <div class="custom-control custom-checkbox standard">
                <input type="checkbox" class="custom-control-input" id="customCheck5">
                <label class="custom-control-label" for="customCheck5">Sometimes (Ask Me)</label>
            </div>
     </div>
     <div class="col-sm">
            <div class="custom-control custom-checkbox standard">
                 <input type="checkbox" class="custom-control-input" id="customCheck6">
                 <label class="custom-control-label" for="customCheck6">Never</label>
            </div>
     </div>
</div>
                    
<div class="row mt-3 @if (Request::segment(1) != 'account') {{'col-8'}} @endif pl-0 mt-2 mb-2">
     <div class="col-sm-6 @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
            <select name="state" class="form-control font-weight-bold">
                <option>Domain.com.au</option>
            </select>
     </div>
     <div class="col-md-auto reg-step-link align-self-center">
         <a data-toggle="collapse" href="#Expanded2" role="button" aria-expanded="false" aria-controls="collapseExample"><span>Set Rules</span></a>
     </div>
</div>
<div class="collapse rules-contents @if (Request::segment(1) != 'account') {{'col-8 pl-0'}} @endif" id="Expanded2">
      <div class="rules-arrow"></div>
      <div class="ExpandForm @if (Request::segment(1) != 'account') {{'p-3'}} @endif"> 
      <div class="row mt-3">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">URL Address</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">A/c Owner</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">Login</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="password" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">Password</div>
      </div>
      <div class="d-flex flex-row-reverse">
            <div class="p-2"><a href="">What is this?</a></div>
      </div>
      <div class="row mb-3 border-top-999 pt-3 mt-0">
            <div class="col-sm-9">
                <textarea name="" class="form-control" placeholder="Instructions or comments"></textarea>
            </div>
            <div class="col-sm-3 align-self-center">
                We Authorised <br>REVid to Action
                <div><a href="">Terms and Conditions</a></div>
                <button class="btn btn-primary bg-ff0033">AUTHORISE</button>
            </div>
      </div>
    </div>           
</div>

<div class="row @if (Request::segment(1) != 'account') {{'col-8'}} @endif pl-0">
     <div class="col-sm @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
            <div class="custom-control custom-checkbox standard">
                <input type="checkbox" class="custom-control-input" id="customCheck7">
                <label class="custom-control-label" for="customCheck1">Always Upload</label>
            </div>
     </div>
     <div class="col-sm">
            <div class="custom-control custom-checkbox standard">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck7">Sometimes (Ask Me)</label>
            </div>
     </div>
     <div class="col-sm">
            <div class="custom-control custom-checkbox standard">
                <input type="checkbox" class="custom-control-input" id="customCheck8">
                <label class="custom-control-label" for="customCheck8">Never</label>
            </div>
     </div>
</div>
                    
<div class="row mt-3  @if (Request::segment(1) != 'account') {{'col-8'}} @endif pl-0 mt-2 mb-2">
            <div class="col-sm-6 @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
                <input type="text" name="other" placeholder="Other" class="form-control">
            </div>
            <div class="col-md-auto reg-step-link align-self-center">
                <a data-toggle="collapse" href="#Expanded3" role="button" aria-expanded="false" aria-controls="collapseExample"><span>Set Rules</span></a>
            </div>
</div>
<div class="collapse rules-contents @if (Request::segment(1) != 'account') {{'col-8 pl-0'}} @endif" id="Expanded3">
      <div class="rules-arrow"></div>
      <div class="ExpandForm @if (Request::segment(1) != 'account') {{'p-3'}} @endif"> 
      <div class="row mt-3">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">URL Address</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">A/c Owner</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">Login</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="password" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">Password</div>
      </div>
      <div class="d-flex flex-row-reverse">
            <div class="p-2"><a href="">What is this?</a></div>
      </div>
      <div class="row mb-3 border-top-999 pt-3 mt-0">
            <div class="col-sm-9">
                <textarea name="" class="form-control" placeholder="Instructions or comments"></textarea>
            </div>
            <div class="col-sm-3 align-self-center">
                We Authorised <br>REVid to Action
                <div><a href="">Terms and Conditions</a></div>
                <button class="btn btn-primary bg-ff0033">AUTHORISE</button>
            </div>
      </div>
    </div>    
</div>

<div class="row @if (Request::segment(1) != 'account') {{'col-8'}} @endif pl-0">
            <div class="col-sm @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
                    <div class="custom-control custom-checkbox standard">
                              <input type="checkbox" class="custom-control-input" id="customCheck9">
                              <label class="custom-control-label" for="customCheck9">Always Upload</label>
                    </div>
            </div>
            <div class="col-sm">
                    <div class="custom-control custom-checkbox standard">
                              <input type="checkbox" class="custom-control-input" id="customCheck10">
                              <label class="custom-control-label" for="customCheck10">Sometimes (Ask Me)</label>
                    </div>
            </div>
            <div class="col-sm">
                    <div class="custom-control custom-checkbox standard">
                              <input type="checkbox" class="custom-control-input" id="customCheck11">
                              <label class="custom-control-label" for="customCheck11">Never</label>
                    </div>
            </div>
</div>
                    
<div class="row mt-3 @if (Request::segment(1) != 'account') {{'col-8'}} @endif pl-0 mt-2 mb-2">
            <div class="col-sm-6 @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
                    <input type="text" name="company" class="form-control" placeholder="Your Company Website">
            </div>
            <div class="col-md-auto reg-step-link align-self-center">
                <a data-toggle="collapse" href="#Expanded4" role="button" aria-expanded="false" aria-controls="collapseExample"><span>Set Rules</span></a>
            </div>
</div>
<div class="collapse rules-contents @if (Request::segment(1) != 'account') {{'col-8 pl-0'}} @endif" id="Expanded4">
      <div class="rules-arrow"></div>
      <div class="ExpandForm @if (Request::segment(1) != 'account') {{'p-3'}} @endif"> 
      <div class="row mt-3">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">URL Address</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">A/c Owner</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">Login</div>
      </div>
      <div class="row">
            <div class="col-sm-9">
                <input type="password" name="" class="form-control">
            </div>
            <div class="col-sm-3 align-self-center">Password</div>
      </div>
      <div class="d-flex flex-row-reverse">
            <div class="p-2"><a href="">What is this?</a></div>
      </div>
      <div class="row mb-3 border-top-999 pt-3 mt-0">
            <div class="col-sm-9">
                <textarea name="" class="form-control" placeholder="Instructions or comments"></textarea>
            </div>
            <div class="col-sm-3 align-self-center">
                We Authorised <br>REVid to Action
                <div><a href="">Terms and Conditions</a></div>
                <button class="btn btn-primary bg-ff0033">AUTHORISE</button>
            </div>
      </div>
    </div>           
</div>
<div class="row @if (Request::segment(1) != 'account') {{'col-8'}} @endif pl-0">
            <div class="col-sm @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
                    <div class="custom-control custom-checkbox standard">
                              <input type="checkbox" class="custom-control-input" id="customCheck12">
                              <label class="custom-control-label" for="customCheck12">Always Upload</label>
                    </div>
            </div>
            <div class="col-sm">
                    <div class="custom-control custom-checkbox standard">
                              <input type="checkbox" class="custom-control-input" id="customCheck13">
                              <label class="custom-control-label" for="customCheck13">Sometimes (Ask Me)</label>
                    </div>
            </div>
            <div class="col-sm">
                            <div class="custom-control custom-checkbox standard">
                              <input type="checkbox" class="custom-control-input" id="customCheck14">
                              <label class="custom-control-label" for="customCheck14">Never</label>
                            </div>
            </div>
</div>
<div class="row col-8">
    <div class="col-sm"></div>
    <div class="col-sm"></div>
    <div class="col-sm"><a href="" class="font12"><b>Add New +</b></a></div>
</div>
