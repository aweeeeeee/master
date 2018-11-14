<div class="row main-title mt-5">
    <div class="col-sm">
        <div class="row">
            <div class="d-flex flex-row">
                 <div class="register-icon r-i-content mb-2"></div>
                 <div class="align-self-center font25 pl-3 font-t-ms"><b>Video Frame Content</b></div>
            </div> 
        </div>
    </div>
</div>
<div class="row">
        <div class="col-sm">
                <div class="header-title mb-4 color-303030"><b>Content</b><br>Enter Content as it will appear:</div>
                <input type="text" class="form-control mt-3 mb-3" name="name" required autofocus placeholder="Name">
                <input type="text" class="form-control mt-3 mb-3" name="mobile" required autofocus placeholder="Mobile">
                <input type="text" class="form-control mt-3 mb-3" name="web" required autofocus placeholder="Email Address">
                <input type="text" class="form-control mt-3 mb-3" name="web" required autofocus placeholder="Web Address">
                <div class="mt-5">
                        <div class="header-title pt-5 mb-2 color-303030"><b>Color Change</b><br>Select Colours as it will appear:</div>
                        <div class="row">
                                        <div class="col-md-auto align-self-center">
                                            <div class="circle-area bg-ccc mx-auto" id="color-opt-1-bg"></div>
                                        </div>
                                        <div class="col-md align-self-center">
                                            <div id="color-opt-1" class="input-group colorpicker-component" >
                                                <input type="text" value="#cccccc" class="form-control txt-input-bg" />
                                                <div class="input-group-addon align-self-center bg-eae mx-2"><span class="a-change-clr"><b>Change</b></span> <span class="c-ff0033"><b>+</b></span></div>
                                            </div>
                                        </div>
                                        <div class="col-md-auto align-self-center">
                                            <div class="circle-area bg-ccc mx-auto" id="color-opt-2-bg"></div>
                                        </div>
                                        <div class="col-md">
                                            <div id="color-opt-2" class="input-group colorpicker-component" >
                                                <input type="text" value="#cccccc" class="form-control txt-input-bg " />
                                                <div class="input-group-addon align-self-center bg-eae mx-2"><span class="a-change-clr"><b>Change</b></span> <span class="c-ff0033"><b>+</b></span></div>
                                            </div>
                                        </div>
                        </div>
            </div>
        </div>
        <div class="col-sm pl-4 select-form">
                <div class="header-title mb-4 color-303030"><b>Main Frame</b><br>Preview</div>
                <img class="img-fluid" src="{{ asset('storage/register/example-frame.jpg') }}">
                <div class="d-flex justify-content-between mt-2">
                    <div class="align-self-center"><a href="" class="d-inline-block color-666">< Click to Expand ></a></div>
                    <div>
                         <div class="d-inline-block pr-3 color-666">Change</div>
                         <div class="d-inline-block">
                                    <select name="" class="form-control">
                                            <option>1</option>
                                    </select>
                         </div>
                    </div>
                </div>
                <div class="select-form-2 mt-4">
                    <div class="header-title mb-2 color-303030"><b>End Frame</b><br>Preview</div>
                    <img class="img-fluid" src="{{ asset('storage/register/end-frame2.jpg') }}">
                    <div class="d-flex justify-content-between mt-2">
                        <div class="align-self-center"><a href="" class="d-inline-block">< Click to Expand ></a></div>
                        <div class="color-666">Change</div>
                    </div>
                </div>
        </div>
</div>