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
            <h3 class="my-account-title mb-3">Manual Video System - Step 5</h3>
            
            @include('frontend.pages.preferences.video-system.steps')
            
            <div class="d-flex justify-content-between join-step-next p-1 mb-3 border-bot pb-3">
                    <button class="btn btn-primary bg-333 btn-no-border px-4"><i class="arrow-left"></i> BACK</button>
            </div>
            
            <h3>Finish</h3>
            
            <div class="row m-r-l my-0">
                <div class="col-sm">
                    <div class="row m-r-l">
                        <div class="col-sm-5 align-self-center">Pictures #</div>
                        <div class="col-sm-7"><div class="form-control b-radius-0">XX</div></div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row m-r-l">
                        <div class="col-sm-5 align-self-center ml-1">Duration</div>
                        <div class="col-sm"><div class="form-control b-radius-0">XX</div></div>
                    </div>
                </div>
            </div>
            <div class="row m-r-l my-0">
                <div class="col-sm">
                    <div class="row m-r-l">
                        <div class="col-sm-5 align-self-center">Voice</div>
                        <div class="col-sm-7"><div class="form-control b-radius-0">XXXXXXXX</div></div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row m-r-l">
                        <div class="col-sm-5 align-self-center ml-1">Music</div>
                        <div class="col-sm"><div class="form-control b-radius-0">XXXXXXX</div></div>
                    </div>
                </div>
            </div>
            <div class="row m-r-l my-0">
                <div class="col-sm">
                    <div class="row m-r-l">
                        <div class="col-sm-5 align-self-center">Template Main:</div>
                        <div class="col-sm-7"><div class="form-control b-radius-0">XXXXXX</div></div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row m-r-l">
                        <div class="col-sm-5 align-self-center ml-1">Template End:</div>
                        <div class="col-sm"><div class="form-control b-radius-0"></div></div>
                    </div>
                </div>
            </div>
            <div class="border-bot5 pb-3 my-3">
                <div class="row m-r-l">
                    <div class="col-sm my-account-subcription">
                        <div class="custom-control custom-checkbox basic">
                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                              <label class="custom-control-label ml-4 mt-2" for="customCheck2">Ready to proceed, please commence building my video</label>
                        </div>
                    </div>
                    <div class="col-md-auto"><button class="btn btn-primary bg-009900 btn-no-border b-radius-7 px-4 py-2"><b>GO</b></button></div>
                </div>
            </div>
            <div class="video-system-con p-3">
                <div class="row video-system-5 m-0">
                    <div class="col-sm py-3 pr-2">
                        <div class="bg-fff h-100">
                            <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto">
                                            <h1 class="c-6600cc m-0"><b>+</b></h1>
                                            <div class="color-414142 font20">Picture 1</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm py-3 pl-2">
                        <div class="bg-fff h-100">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                        </div>
                    </div>
                </div>
                <div class="row video-system-5 my-3">
                    <div class="col-sm py-3 pr-2">
                        <div class="bg-fff h-100">
                            <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto">
                                            <h1 class="c-6600cc m-0"><b>+</b></h1>
                                            <div class="color-414142 font20">Picture 2</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm py-3 pl-2">
                        <div class="bg-fff h-100">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                        </div>
                    </div>
                </div>
                <div class="row video-system-5 m-0">
                    <div class="col-sm py-3 pr-2">
                        <div class="bg-fff h-100">
                            <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto">
                                            <h1 class="c-6600cc m-0"><b>+</b></h1>
                                            <div class="color-414142 font20">Picture 3</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm py-3 pl-2">
                        <div class="bg-fff h-100">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                        </div>
                    </div>
                </div>
                <div class="row video-system-5 my-3">
                    <div class="col-sm py-3 pr-2">
                        <div class="bg-fff h-100">
                            <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto">
                                            <h1 class="c-6600cc m-0"><b>+</b></h1>
                                            <div class="color-414142 font20">Picture 4</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm py-3 pl-2">
                        <div class="bg-fff h-100">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                        </div>
                    </div>
                </div>
                <div class="row video-system-5 m-0">
                    <div class="col-sm py-3 pr-2">
                        <div class="bg-fff h-100">
                            <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto">
                                            <h1 class="c-6600cc m-0"><b>+</b></h1>
                                            <div class="color-414142 font20">Picture 5</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm py-3 pl-2">
                        <div class="bg-fff h-100">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                        </div>
                    </div>
                </div>
                <div class="row video-system-5 my-3">
                    <div class="col-sm py-3 pr-2">
                        <div class="bg-fff h-100">
                            <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto">
                                            <h1 class="c-6600cc m-0"><b>+</b></h1>
                                            <div class="color-414142 font20">Picture 6</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm py-3 pl-2">
                        <div class="bg-fff h-100">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                        </div>
                    </div>
                </div>
                <div class="row video-system-5 m-0">
                    <div class="col-sm py-3 pr-2">
                        <div class="bg-fff h-100">
                            <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto">
                                            <h1 class="c-6600cc m-0"><b>+</b></h1>
                                            <div class="color-414142 font20">Picture 7</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm py-3 pl-2">
                        <div class="bg-fff h-100">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                        </div>
                    </div>
                </div>
                <div class="row video-system-5 my-3">
                    <div class="col-sm py-3 pr-2">
                        <div class="bg-fff h-100">
                            <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto">
                                            <h1 class="c-6600cc m-0"><b>+</b></h1>
                                            <div class="color-414142 font20">Picture 8</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm py-3 pl-2">
                        <div class="bg-fff h-100">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                        </div>
                    </div>
                </div>
                <div class="row video-system-5 m-0">
                    <div class="col-sm py-3 pr-2">
                        <div class="bg-fff h-100">
                            <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto">
                                            <h1 class="c-6600cc m-0"><b>+</b></h1>
                                            <div class="color-414142 font20">Picture 9</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm py-3 pl-2">
                        <div class="bg-fff h-100">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                        </div>
                    </div>
                </div>
                <div class="row video-system-5 mt-3">
                    <div class="col-sm py-3 pr-2">
                        <div class="bg-fff h-100">
                            <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto">
                                            <h1 class="c-6600cc m-0"><b>+</b></h1>
                                            <div class="color-414142 font20">Picture 10</div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm py-3 pl-2">
                        <div class="bg-fff h-100">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row my-4">
              <div><button class="btn btn-primary bg-333 btn-no-border v-s-btn-t px-3"><i class="arrow-left"></i>BACK</button></div>
              <div class="px-3">
                    <div class="my-account-subcription">
                        <div class="custom-control custom-checkbox basic">
                              <input type="checkbox" class="custom-control-input" id="customCheck3">
                              <label class="custom-control-label ml-4 mt-2" for="customCheck3">Ready to proceed, please commence building my video</label>
                        </div>
                    </div>
              </div>
              <div><button class="btn btn-primary bg-009900 btn-no-border b-radius-7 px-4 py-2"><b>GO</b></button></div>
            </div>
        </div>
    </div>
</div>
@endsection
