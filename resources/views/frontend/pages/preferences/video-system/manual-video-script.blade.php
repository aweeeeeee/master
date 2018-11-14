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
            <h3 class="my-account-title mb-3">Manual Video System - Step 2 (10 - TEMPLATE)</h3>
            
            @include('frontend.pages.preferences.video-system.steps')
            
            <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-between join-step-next p-1 mb-3">
                    <button class="btn btn-primary bg-333 btn-no-border px-4"><i class="arrow-left"></i> BACK</button>
                </div>
                <div class="align-self-center"><a href="">How this Works?</a></div>
            </div>
            <div class="border-t-b-666">
                <div class="row m-r-l my-0 m-v-col">
                    <div class="col-sm-4 py-2">
                        <h3 class="mb-0">Story Board</h3>
                        <div>Move Images to Any Order</div>
                    </div>
                    <div class="col-sm py-2">
                        <div class="d-flex justify-content-between">
                            <div>
                                 <h3 class="mb-0">Build Script</h3>
                                 <div>Statement Types are Fixed Order</div>
                            </div>
                            <div class="align-self-center"><button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-3">
                                    <i class="standard-video sv-save"></i> SAVE
                                 </button>
                            </div>
                        </div>
                    </div>
                  </div>         
            </div>
            <div class="m-v-scroll">
                 <div class="row m-v-row my-0">
                    <div class="col-sm-4 pt-3">
                        <div class="bg-efefef p-2 color-333"><b>Picture 1</b></div>
                        <img src="{{ asset('storage/manual-video-sample.jpg') }}" >
                        <div class="bg-efefef p-2 color-333"><b>Picture 2</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        <div class="bg-efefef p-2 color-333"><b>Picture 3</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        <div class="bg-efefef p-2 color-333"><b>Picture 4</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        <div class="bg-efefef p-2 color-333"><b>Picture 5</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        <div class="bg-efefef p-2 color-333"><b>Picture 6</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        <div class="bg-efefef p-2 color-333"><b>Picture 7</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        <div class="bg-efefef p-2 color-333"><b>Picture 8</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        <div class="bg-efefef p-2 color-333"><b>Picture 9</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                        <div class="bg-efefef p-2 color-333"><b>Picture 10</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                    </div>
                    <div class="col-sm pt-3">
                        <div class="bg-efefef p-2 color-333"><b>Introductory Statement</b></div>
                        <div class="register-form">
                            <div class="text-center m-v-border py-1">
                                <div class="c-6600cc m-0 m-v-add"><b>+</b></div>
                                <div>Statement</div>
                            </div>
                            <select name="state" class="form-control color-333 mt-2">
                                    <option>< Click for Statements ></option>
                             </select>
                        </div>
                        <div class="bg-efefef p-2 color-333"><b>General Statement About Property</b></div>
                        <div class="register-form">
                            <div class="text-center m-v-border py-1">
                                <div class="c-6600cc m-0 m-v-add"><b>+</b></div>
                                <div>Statement</div>
                            </div>
                            <select name="state" class="form-control color-333 mt-2">
                                    <option>< Click for Statements ></option>
                             </select>
                        </div>
                        <div class="bg-efefef p-2 color-333"><b>Linked General Statement About Property</b></div>
                        <div class="register-form">
                            <div class="text-center m-v-border py-1">
                                <div class="c-6600cc m-0 m-v-add"><b>+</b></div>
                                <div>Statement</div>
                            </div>
                            <select name="state" class="form-control color-333 mt-2">
                                    <option>< Click for Statements ></option>
                             </select>
                        </div>
                        <div class="bg-efefef p-2 color-333"><b>Layout or Property Style Statement</b></div>
                        <div class="register-form">
                            <div class="text-center m-v-border py-1">
                                <div class="c-6600cc m-0 m-v-add"><b>+</b></div>
                                <div>Statement</div>
                            </div>
                            <select name="state" class="form-control color-333 mt-2">
                                    <option>< Click for Statements ></option>
                             </select>
                        </div>
                        <div class="bg-efefef p-2 color-333"><b>Key Feature Statement</b></div>
                        <div class="register-form">
                            <div class="text-center m-v-border py-1">
                                <div class="c-6600cc m-0 m-v-add"><b>+</b></div>
                                <div>Statement</div>
                            </div>
                            <select name="state" class="form-control color-333 mt-2">
                                    <option>< Click for Statements ></option>
                             </select>
                        </div>
                        <div class="bg-efefef p-2 color-333"><b>Linked Key Feature Statement 1</b></div>
                        <div class="register-form">
                            <div class="text-center m-v-border py-1">
                                <div class="c-6600cc m-0 m-v-add"><b>+</b></div>
                                <div>Statement</div>
                            </div>
                            <select name="state" class="form-control color-333 mt-2">
                                    <option>< Click for Statements ></option>
                             </select>
                        </div>
                        <div class="bg-efefef p-2 color-333"><b>Linked Key Feature Statement 2</b></div>
                        <div class="register-form">
                            <div class="text-center m-v-border py-1">
                                <div class="c-6600cc m-0 m-v-add"><b>+</b></div>
                                <div>Statement</div>
                            </div>
                            <select name="state" class="form-control color-333 mt-2">
                                    <option>< Click for Statements ></option>
                             </select>
                        </div>
                        <div class="bg-efefef p-2 color-333"><b>Uniqueness Statement</b></div>
                        <div class="register-form">
                            <div class="text-center m-v-border py-1">
                                <div class="c-6600cc m-0 m-v-add"><b>+</b></div>
                                <div>Statement</div>
                            </div>
                            <select name="state" class="form-control color-333 mt-2">
                                    <option>< Click for Statements ></option>
                             </select>
                        </div>
                        <div class="bg-efefef p-2 color-333"><b>Linked Uniqueness Statement</b></div>
                        <div class="register-form">
                            <div class="text-center m-v-border py-1">
                                <div class="c-6600cc m-0 m-v-add"><b>+</b></div>
                                <div>Statement</div>
                            </div>
                            <select name="state" class="form-control color-333 mt-2">
                                    <option>< Click for Statements ></option>
                             </select>
                        </div>
                        <div class="bg-efefef p-2 color-333"><b>Closing Statement with Call to Action</b></div>
                        <div class="register-form">
                            <div class="text-center m-v-border py-1">
                                <div class="c-6600cc m-0 m-v-add"><b>+</b></div>
                                <div>Statement</div>
                            </div>
                            <select name="state" class="form-control color-333 my-2">
                                    <option>< Click for Statements ></option>
                             </select>
                        </div>
                    </div>
                </div>
             </div>
            
              <div class="d-flex my-4 join-step-next">
                    <div><button class="btn btn-primary bg-333 btn-no-border v-s-btn-t px-5"><i class="arrow-left"></i>BACK</button></div>
                    <div class="ml-auto"><button class="btn btn-primary v-s-btn-t">SAVE : Next Step 3<i class="arrow-right"></i></button></div>
               </div>
        </div>
    </div>
</div>
@endsection
