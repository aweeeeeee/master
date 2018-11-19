@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form pb-4">
            <h3 class="my-account-title">premium Video - Storyboard</h3>
            <table class="table-action mb-4" cellpadding="0" cellspacing="0" width="100%">
                <tr class="bg-eae">
                    <td><b>Video #</b></td>
                    <td><b>Address</b></td>
                </tr>
                <tr>
                    <td>#XXXX</td>
                    <td>
                        <div class="d-flex">
                          <div>63 North Rd Bassendean</div>
                          <div class="ml-auto"><a href="">Return My Tracker</a></div>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="row">
                <div class="col-sm pl-0">Pictures # XX</div>
                <div class="col-sm">Duration XX</div>
            </div>
            <div class="row">
                <div class="col-sm pl-0">Voice XXXXXXXXXX</div>
                <div class="col-sm">Music XXXXXXXXXXX</div>
            </div>
            <div class="row">
                <div class="col-sm pl-0">Template XXXXXXX</div>
                <div class="col-sm"></div>
            </div>
            <div class="d-flex border-bot py-3 mb-4">
              <div class="my-account-subcription mr-3">
                    <div class="custom-control custom-checkbox basic">
                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                          <label class="custom-control-label ml-1" for="customCheck2"></label>
                    </div>
              </div>
              <div class="mr-auto pt-2 align-self-center">Ready to proceed, please commence building my video</div>
              <div><button class="btn btn-primary btn-no-border b-radius-7 bg-009900 px-3"><b>GO</b></button></div>
            </div>
            <div class="video-system-con p-3">
                    <div class="row video-system-5 m-0 mb-4">
                            <div class="col-sm-4 py-3">
                                <div class="bg-fff h-100">
                                    <div class="row my-0 h-100 script-tool-text">
                                            <div class="col my-auto text-center">
                                                <div class="mx-auto">
                                                    <span class="c-6600cc"><b>+</b></span>
                                                    <div>Picture 1</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-8 py-3">
                                <div class="bg-fff h-100">
                                    <div class="d-flex flex-row-reverse">
                                      <div class="p-1 c-6600cc">01m:14s</div>
                                      <div class="p-1 c-ff0033">Words: 17</div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Pellentesque accumsan enim ac sagittis laoreet.
                                    Donec pretium, dui dictum tincidunt cursus, orci urna
                                    dapibus elit, eget egestas mauris lorem sit amet
                                    diam. Phasellus volutpat laoreet fringilla. Pellentesque ornare ac tellus nec egestas. In adipiscing</p>
                                </div>
                            </div>
                    </div>
                    <div class="row video-system-5 m-0 mb-3">
                            <div class="col-sm-4 py-3">
                                <div class="bg-fff h-100">
                                    <div class="row my-0 h-100 script-tool-text">
                                            <div class="col my-auto text-center">
                                                <div class="mx-auto">
                                                    <span class="c-6600cc"><b>+</b></span>
                                                    <div>Picture 2</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-8 py-3">
                                <div class="bg-fff h-100">
                                    <div class="d-flex flex-row-reverse">
                                      <div class="p-1 c-6600cc">01m:14s</div>
                                      <div class="p-1 c-ff0033">Words: 17</div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Pellentesque accumsan enim ac sagittis laoreet.
                                    Donec pretium, dui dictum tincidunt cursus, orci urna
                                    dapibus elit, eget egestas mauris lorem sit amet
                                    diam. Phasellus volutpat laoreet fringilla. Pellentesque ornare ac tellus nec egestas. In adipiscing</p>
                                </div>
                            </div>
                    </div>
                    <div class="row video-system-5 m-0 mb-3">
                            <div class="col-sm-4 py-3">
                                <div class="bg-fff h-100">
                                    <div class="row my-0 h-100 script-tool-text">
                                            <div class="col my-auto text-center">
                                                <div class="mx-auto">
                                                    <span class="c-6600cc"><b>+</b></span>
                                                    <div>Picture 3</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-8 py-3">
                                <div class="bg-fff h-100">
                                    <div class="d-flex flex-row-reverse">
                                      <div class="p-1 c-6600cc">01m:14s</div>
                                      <div class="p-1 c-ff0033">Words: 17</div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Pellentesque accumsan enim ac sagittis laoreet.
                                    Donec pretium, dui dictum tincidunt cursus, orci urna
                                    dapibus elit, eget egestas mauris lorem sit amet
                                    diam. Phasellus volutpat laoreet fringilla. Pellentesque ornare ac tellus nec egestas. In adipiscing</p>
                                </div>
                            </div>
                    </div>
                    <div class="row video-system-5 m-0 mb-3">
                            <div class="col-sm-4 py-3">
                                <div class="bg-fff h-100">
                                    <div class="row my-0 h-100 script-tool-text">
                                            <div class="col my-auto text-center">
                                                <div class="mx-auto">
                                                    <span class="c-6600cc"><b>+</b></span>
                                                    <div>Picture 4</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-8 py-3">
                                <div class="bg-fff h-100">
                                    <div class="d-flex flex-row-reverse">
                                      <div class="p-1 c-6600cc">01m:14s</div>
                                      <div class="p-1 c-ff0033">Words: 17</div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Pellentesque accumsan enim ac sagittis laoreet.
                                    Donec pretium, dui dictum tincidunt cursus, orci urna
                                    dapibus elit, eget egestas mauris lorem sit amet
                                    diam. Phasellus volutpat laoreet fringilla. Pellentesque ornare ac tellus nec egestas. In adipiscing</p>
                                </div>
                            </div>
                    </div>
                    <div class="row video-system-5 m-0 mb-0">
                            <div class="col-sm-4 py-3">
                                <div class="bg-fff h-100">
                                    <div class="row my-0 h-100 script-tool-text">
                                            <div class="col my-auto text-center">
                                                <div class="mx-auto">
                                                    <span class="c-6600cc"><b>+</b></span>
                                                    <div>Picture 5</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-8 py-3">
                                <div class="bg-fff h-100">
                                    <div class="d-flex flex-row-reverse">
                                      <div class="p-1 c-6600cc">01m:14s</div>
                                      <div class="p-1 c-ff0033">Words: 17</div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Pellentesque accumsan enim ac sagittis laoreet.
                                    Donec pretium, dui dictum tincidunt cursus, orci urna
                                    dapibus elit, eget egestas mauris lorem sit amet
                                    diam. Phasellus volutpat laoreet fringilla. Pellentesque ornare ac tellus nec egestas. In adipiscing</p>
                                </div>
                            </div>
                    </div>
            </div>
            <div class="d-flex py-3 mb-4">
              <div class="my-account-subcription mr-3">
                    <div class="custom-control custom-checkbox basic">
                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                          <label class="custom-control-label ml-1" for="customCheck2"></label>
                    </div>
              </div>
              <div class="mr-auto pt-2 align-self-center">Ready to proceed, please commence building my video</div>
              <div><button class="btn btn-primary btn-no-border b-radius-7 bg-009900 px-3"><b>GO</b></button></div>
            </div>
        </div>
    </div>
</div>
@endsection

