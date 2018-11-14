<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js"></script> 
<div class="row main-title">
    <div class="col-sm">
        <div class="align-self-center">
            <div class="d-flex flex-row">
                <div class="register-icon r-i-frame mb-2"></div>
                <div class="align-self-center font25 pl-3 font-t-ms"><b>Video Frame Templates</b></div>
            </div> 
        </div>
    </div>
    <div class="col-sm">
        <div class="text-justify">
            <b>SELECT YOUR FRAME TEMPLATE</b>
            <p>Please select Your Video Frame Templates from the choices below.</p>
        </div>
    </div>
</div>
<div class="border-bot pt-0">
<div class="row">
        <div class="col-sm color-303030">
                <div class="header-title mb-4"><b>Main Frame</b><br>
                Please select the Frame you would like to use:</div>
                <div class="color-404"><b>Choose Action Instruction</b></div>
                <select name="state" class="form-control mt-3 mb-5 col-10">
                        <option>Use Only One as Selected</option>
                </select>
        </div>
        <div class="col-sm-6 select-form">
                <div class="row">
                    <div class="col-sm">
                                <img class="img-fluid w-100" src="{{ asset('storage/account/default-main-template1.jpg') }}"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                  <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck1">
                                  <label class="custom-control-label font12" for="customCheck1">Select</label>
                                </div>
                    </div>
                    <div class="col-sm">
                                <img class="img-fluid w-100" src="{{ asset('storage/account/default-main-template2.jpg') }}"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                  <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck2">
                                  <label class="custom-control-label font12" for="customCheck2">Select</label>
                                </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm">
                                <img class="img-fluid w-100" src="{{ asset('storage/account/default-main-template3.jpg') }}"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                  <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck3">
                                  <label class="custom-control-label font12" for="customCheck3">Select</label>
                                </div>
                    </div>
                    <div class="col-sm">
                                <img class="img-fluid w-100" src="{{ asset('storage/account/default-main-template4.jpg') }}"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                  <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck4">
                                  <label class="custom-control-label font12" for="customCheck4">Select</label>
                                </div>
                    </div>
                </div>
        </div>
</div>
</div>
<div class="row mt-3">
                    <div class="col-sm">
                            <div class="header-title mb-4 color-303030"><b>End Frame</b><br>Please select the Frame  you would like to use:</div>
                            <div class="color-404"><b>Choose Action Instruction</b></div>
                            <select name="state" class="form-control col-10 mt-3 mb-5">
                                    <option>No Preference (Randomise All)</option>
                            </select>
                    </div>
                    <div class="col-sm select-form">
                        <div class="row">
                            <div class="col-sm">
                                <img class="img-fluid w-100" src="{{ asset('storage/account/default-end-template1.jpg') }}"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                  <input type="checkbox" class="custom-control-input" name="end-frame" id="customCheck9">
                                  <label class="custom-control-label font12" for="customCheck9">Select</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <img class="img-fluid w-100" src="{{ asset('storage/account/default-end-template2.jpg') }}"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                  <input type="checkbox" class="custom-control-input" name="end-frame" id="customCheck10">
                                  <label class="custom-control-label font12" for="customCheck10">Select</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm">
                                <img class="img-fluid w-100" src="{{ asset('storage/account/default-end-template3.jpg') }}"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                  <input type="checkbox" class="custom-control-input" name="end-frame" id="customCheck11">
                                  <label class="custom-control-label font12" for="customCheck11">Select</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <img class="img-fluid w-100" src="{{ asset('storage/account/default-end-template4.jpg') }}"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                  <input type="checkbox" class="custom-control-input" name="end-frame" id="customCheck12">
                                  <label class="custom-control-label font12" for="customCheck12">Select</label>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
<script>
    
$(function() {
        
          $('#color-opt-1,#color-opt-2').colorpicker();
        
          $('#color-opt-1').colorpicker().on(
			'changeColor',
			function() {
				$('#color-opt-1-bg').css('background-color',
						$(this).colorpicker('getValue', '#ffffff'));
            });
        
          $('#color-opt-2').colorpicker().on(
			'changeColor',
			function() {
				$('#color-opt-2-bg').css('background-color',
						$(this).colorpicker('getValue', '#ffffff'));
            });
        
});
    
</script>
