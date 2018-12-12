@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form pb-5">
           <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
           <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js"></script> 
           <h3 class="my-account-title pb-3 font-weight-bold mb-4">My Templates</h3>
           <h3 class="font20 mt-4 mb-0">Content</h3>
           Enter Content as it will appear:
           <div class="d-flex flex-column register-form">
              <div><input id="name" type="text" class="form-control" name="" required="" autofocus="" placeholder="Name"></div>
              <div class="my-3"><input id="name" type="text" class="form-control" name="" required="" autofocus="" placeholder="Mobile"></div>
              <div><input id="name" type="email" class="form-control" name="" required="" autofocus="" placeholder="Email"></div>
              <div class="my-3"><input id="name" type="text" class="form-control" name="" required="" autofocus="" placeholder="Web Address"></div>
           </div>
           <div class="header-title my-2 color-303030"><b>Color Change</b><br>Select Colours as it will appear:</div>
           <div class="row m-r-l">
                        <div class="col-md">
                            <div class="row m-r-l">
                                <div class="col-md-auto align-self-center">
                                    <div class="circle-area bg-ccc mx-auto" id="color-opt-1-bg"></div>
                                </div>
                                <div class="col-md-7 align-self-center px-1">
                                    <div id="color-opt-1" class="input-group colorpicker-component" >
                                            <input type="text" value="#cccccc" class="form-control btn-no-border"/>
                                            <div class="input-group-addon align-self-center bg-fff mx-2"><span class="a-change-clr">Change</span> <span class="c-ff0033"><b>+</b></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row m-r-l">
                                <div class="col-md-auto align-self-center">
                                    <div class="circle-area bg-ccc mx-auto" id="color-opt-2-bg"></div>
                                </div>
                                <div class="col-md-7 align-self-center px-1">
                                    <div id="color-opt-2" class="input-group colorpicker-component" >
                                            <input type="text" value="#cccccc" class="form-control btn-no-border" />
                                            <div class="input-group-addon align-self-center bg-fff mx-2"><span class="a-change-clr"><b>Change</b></span> <span class="c-ff0033"><b>+</b></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
           <h3 class="font20 mt-3">Main Frame</h3>
           <div class="border-bot pt-0 pb-2">
                           <div class="row m-r-l">
                                <div class="col"><img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
                           </div>
                           <div class="d-flex justify-content-between">
                              <div>< Click to Expand ></div>
                              <div class="p-2"><a data-toggle="collapse" href="#Expanded1" role="button" aria-expanded="false" aria-controls="collapseExample" class="color-ff0033">Change Template</a></div>
                           </div>
                           <div class="collapse my-template-checkbox pb-3" id="Expanded1">
                               <div class="rules-arrow7"></div>
                               <div class="ExpandForm px-3 pb-3">
                                   <div class="register-form col-8">
                                            <select name="" class="form-control">
                                                <option>Use Only One as Selected</option>
                                            </select>
                                   </div>
                                   <h4 class="my-3 font20">Please select below</h4>
                                   <div class="row m-r-l">
                                        <div class="col-sm">
                                              <img src="{{ asset('storage/account/default-main-template1.jpg') }}" class="img-fluid"><br>
                                              <div class="d-flex flex-row-reverse">
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck1">
                                                        <label class="custom-control-label font12" for="customCheck1">Select</label>
                                                  </div>
                                              </div>
                                        </div>
                                        <div class="col-sm">
                                              <img src="{{ asset('storage/account/default-main-template2.jpg') }}" class="img-fluid"><br>
                                              <div class="d-flex flex-row-reverse">
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck2">
                                                        <label class="custom-control-label font12" for="customCheck2">Select</label>
                                                  </div>
                                              </div>
                                        </div>
                                   </div>
                                   <div class="row mt-3 m-r-l">
                                        <div class="col-sm">
                                              <img src="{{ asset('storage/account/default-main-template3.jpg') }}" class="img-fluid"><br>
                                              <div class="d-flex flex-row-reverse">
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck3">
                                                        <label class="custom-control-label font12" for="customCheck3">Select</label>
                                                  </div>
                                              </div>
                                        </div>
                                        <div class="col-sm">
                                              <img src="{{ asset('storage/account/default-main-template4.jpg') }}" class="img-fluid"><br>
                                              <div class="d-flex flex-row-reverse">
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck4">
                                                        <label class="custom-control-label font12" for="customCheck4">Select</label>
                                                  </div>  
                                              </div>
                                        </div>
                                   </div>
                               </div>
                            </div>
           </div>
           <div class="pt-0 pb-2">
                               <h3 class="font20 my-3">End Frame</h3>
                               <div class="row m-r-l">
                                    <div class="col"><img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
                               </div>
                               <div class="d-flex justify-content-between">
                                  <div>< Click to Expand ></div>
                                  <div class="p-2"><a data-toggle="collapse" href="#Expanded2" role="button" aria-expanded="false" aria-controls="collapseExample" class="color-ff0033">Change Template</a></div>
                               </div>
                               <div class="collapse my-template-checkbox pb-3" id="Expanded2">
                                   <div class="rules-arrow7"></div>
                                   <div class="ExpandForm px-3 pb-3">
                                       <div class="register-form col-8">
                                            <select name="" class="form-control">
                                                <option>No Preference (Randomise All)</option>
                                            </select>
                                       </div>
                                       <h4 class="my-3 font20">Please select below</h4>
                                       <div class="row m-r-l">
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/default-end-template1.jpg') }}" class="img-fluid"><br>
                                                  <div class="d-flex flex-row-reverse">
                                                      <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck5">
                                                            <label class="custom-control-label font12" for="customCheck5">Select</label>
                                                      </div>  
                                                  </div>
                                            </div>
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/default-end-template2.jpg') }}" class="img-fluid"><br>
                                                  <div class="d-flex flex-row-reverse">
                                                      <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck6">
                                                            <label class="custom-control-label font12" for="customCheck6">Select</label>
                                                      </div>
                                                  </div>
                                            </div>
                                       </div>
                                       <div class="row mt-3 m-r-l">
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/default-end-template3.jpg') }}" class="img-fluid"><br>
                                                  <div class="d-flex flex-row-reverse">
                                                      <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck7">
                                                            <label class="custom-control-label font12" for="customCheck7">Select</label>
                                                      </div>  
                                                  </div>
                                            </div>
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/default-end-template4.jpg') }}" class="img-fluid"><br>
                                                  <div class="d-flex flex-row-reverse">
                                                        <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck8">
                                                            <label class="custom-control-label font12" for="customCheck8">Select</label>
                                                        </div> 
                                                  </div>
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

        </div>
    </div>
</div>
@endsection
