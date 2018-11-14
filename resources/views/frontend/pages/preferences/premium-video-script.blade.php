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
            <h3 class="my-account-title">Custom Video Script Tool</h3>
            <table class="table-action mb-4" cellpadding="0" cellspacing="0" width="100%">
                 <tbody>
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
                 </tbody>
            </table>
            <h3 class="d-inline-block">Scripting Options</h3> <a href=""class="d-inline-block">What is this?</a>
            <form>
                <div class="row scripting-options py-3">
                    <div class="col-sm pr-2">
                        <button class="bg-eae"><i class="script-options upload-script"></i> Click here to Upload Script</button>
                        <button class="my-2"><i class="script-options write-script"></i> Write your own Script with Script Tool</button>
                        <button><i class="script-options interview-script"></i> We write professional script. (interview)</button>
                    </div>
                    <div class="col-sm pl-2">
                        <div class="border-ccc px-3 py-2 h-100">
                            <div class="color-ff0033 font13"><b>Script Uploader</b></div>
                            <br><br>
                            <div class="color-cbc">Drag to Upload Your Script</div>
                        </div>
                    </div>
                </div>
                <h3 class="d-inline-block mt-4">Script Tool</h3> <a href=""class="d-inline-block">What is this?</a>
                <div class="video-system-con p-3 mb-4">
                        <div class="row script-btn mt-0">
                            <div class="col-sm-4 script-tool"><button class="btn m-0"><i class="standard-video sv-save"></i>SAVE</button></div>
                            <div class="col-sm-8 script-hear"><button class="btn m-0 bg-006 w-100"><i class="standard-video sv-hear"></i>Click to hear script (auto voice)</button></div>
                        </div>
                        <div class="row video-system-5 m-0">
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
                        <div class="row video-system-5 mt-3">
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
                        <div class="row video-system-5 mt-3">
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
                        <div class="row video-system-5 mt-3">
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
                        <div class="row video-system-5 mt-3">
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
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection