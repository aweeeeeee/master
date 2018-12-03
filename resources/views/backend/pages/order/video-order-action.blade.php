@extends('backend.layouts.main')

@section('content')
    <div class="content">
        <div class="row my-4">
            <div class="col-sm vao-content">
                <h3 class="mb-4">Video Action Order</h3>
                <table class="tbl-order tbl-w-1">
                    <tr>
                        <td>Type of Order</td>
                        <td>@if (Request::segment(2) == 'manual')
                                <b>MANUAL</b>
                            @elseif (Request::segment(2) == 'custom')
                                <b>CUSTOM</b>
                            @elseif (Request::segment(2) == 'auto')
                                <b>AUTO - DIRECT DOWNLOAD</b>
                            @elseif (Request::segment(2) == 'auto-url')
                                <b>AUTO - URL</b>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Compiler</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Editor</td>
                        <td></td>
                    </tr>
                </table>
                <div class="my-4">
                    <div class="tbl-title">Property Details</div>
                    <table class="tbl-order tbl-w-1">
                        <tr>
                            <td>URL</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Address 1</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Address 2</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Suburb</td>
                            <td></td>
                        </tr>
                    </table>
                    <table class="tbl-last">
                        <tr>
                            <td>State</td>
                            <td>Post Code</td>
                        </tr>
                     </table>
                     <div class="border-property mt-3 py-3">
                        <div class="row">
                            <div class="col-sm">
                                <div class="d-flex flex-row">
                                    <div class="bg-eae px-2 pt-2"><i class="d-u-icon"></i></div>
                                    <input type="text" name="" class="form-control b-radius-0 ml-2 w-100" placeholder="Bedroom">
                                </div>
                            </div>
                            <div class="col-sm">
                                 <div class="d-flex flex-row">
                                     <div class="bg-eae p-2"><i class="d-u-icon d-u-icon-bat"></i></div>
                                     <input type="text" name="" class="form-control b-radius-0 ml-2 w-100" placeholder="Bathrooms">
                                 </div>
                            </div>
                            <div class="col-sm">
                                 <div class="d-flex flex-row">
                                     <div class="bg-eae p-2"><i class="d-u-icon d-u-icon-car"></i></div>
                                     <input type="text" name="" class="form-control b-radius-0 ml-2 w-100" placeholder="Cars">
                                 </div>
                            </div>
                        </div>
                     </div>
                    
                        <table class="tbl-order tbl-w-1">
                            <tr>
                                <td>Property Type</td> 
                                <td></td>
                            </tr>
                        </table>
                </div>
            </div>
            <div class="col-sm">
                <table class="tbl-order tbl-w-2">
                    <tr>
                        <td>Priority</td>
                        <td class="
                            @if (Request::segment(2) == 'manual')
                                bg-ffbc00
                            @elseif (Request::segment(2) == 'custom')
                                bg-0066ff
                            @elseif (Request::segment(2) == 'auto' || Request::segment(2) == 'auto-url')
                                bg-ff3300
                            @endif text-center color-fff">
                            @if (Request::segment(2) == 'manual')
                                <b>NORMAL</b>
                            @elseif (Request::segment(2) == 'custom')
                                <b>SURGE</b>
                            @elseif (Request::segment(2) == 'auto' || Request::segment(2) == 'auto-url')
                                <b>RUSH</b>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td class="bg-3333cc text-center color-fff"><b>OPEN</b></td>
                    </tr>
                </table>
                <table class="tbl-order tbl-w-2 my-4">
                    <tr>
                        <td>Video Number</td>
                        <td>#XXXX</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>Time</td>
                    </tr>
                </table>
                <div class="tbl-title ">Due Date</div>
                <table class="tbl-order tbl-w-2">
                    <tr>
                        <td class="
                            @if (Request::segment(2) == 'manual')
                                bg-ffbc00
                            @elseif (Request::segment(2) == 'custom')
                                bg-0066ff
                            @elseif (Request::segment(2) == 'auto' || Request::segment(2) == 'auto-url')
                                bg-ff3300
                            @endif color-fff">Date</td>
                        <td class="
                            @if (Request::segment(2) == 'manual')
                                bg-ffbc00
                            @elseif (Request::segment(2) == 'custom')
                                bg-0066ff
                            @elseif (Request::segment(2) == 'auto' || Request::segment(2) == 'auto-url')
                                bg-ff3300
                            @endif color-fff">Time</td>
                    </tr>
                </table>
                <div class="tbl-title mt-4">Customer Details</div>
                <table class="tbl-order tbl-w-1">
                    <tr>
                        <td>Name</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Position</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Agency</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="summary-tab" data-toggle="tab" href="#summary" role="tab" aria-controls="summary" aria-selected="true">Summary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="storyboard-tab" data-toggle="tab" href="#storyboard" role="tab" aria-controls="storyboard" aria-selected="false">Story Board</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="video-tab" data-toggle="tab" href="#activate-video" role="tab" aria-controls="video" aria-selected="false">Activate Video</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active p-3" id="summary" role="tabpanel" aria-labelledby="home-tab">
              <table class="tbl-summary">
                <tr>
                    <td>Summary of Video Parameters</td>
                    <td></td>
                    <td class="text-center">QA</td>
                    <td class="text-center">Time Stamp #</td>
                </tr>
                <tr>
                    <td>Details</td>  
                    <td class="p-0">
                        <div class="d-flex justify-content-start tbl-col-3">
                            <div>#Pictures <span>#00</span></div>
                            <div>Template <span>#00</span></div>
                            <div>Est. Duration <span>#00m:00s</span></div>
                        </div>
                    </td>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline"></label>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Script</td>
                    <td class="p-0">
                        <select class="form-control">
                            <option value="">< Compiled/Completed ></option>
                        </select>
                    </td>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline"></label>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Opening Animation</td>
                    <td></td>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline"></label>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Main Frame Template Selected</td>
                    <td></td>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline"></label>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>End Frame Template Selected</td>
                    <td></td>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline"></label>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Closing Animation</td>
                    <td></td>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline"></label>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Voice Settings</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Voice Selected for this Video</td>
                    <td></td>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline"></label>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Music Settings</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Music Selected for this Video</td>
                    <td></td>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline"></label>
                        </div>
                    </td>
                    <td></td>
                </tr>
              </table>
              <table class="tbl-qa mt-4">
                <tr>
                    <td>Quality Assessment</td>
                    <td class="text-center">QA</td>  
                    <td class="text-center">Time Stamp #</td>  
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-sm text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline"></label>
                                </div>
                                <div>Poor</div>
                            </div>
                            <div class="col-sm text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline"></label>
                                </div>
                                <div>Acceptable</div>
                            </div>
                            <div class="col-sm text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline"></label>
                                </div>
                                Average
                            </div>
                            <div class="col-sm text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline"></label>
                                </div>
                                Good
                            </div>
                            <div class="col-sm text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline"></label>
                                </div>
                                Great
                            </div>
                        </div>     
                    </td>  
                    <td>
                        <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline"></label>
                        </div>
                    </td>
                    <td></td>
                </tr>
              </table>
              
              <div class="tbl-title mt-3">Comments + Notes</div>
              <div class="tbl-notes">
              
              </div>
          </div>
          <div class="tab-pane fade px-3 storyboard-tab" id="storyboard" role="tabpanel" aria-labelledby="storyboard-tab">
                <div class="board-upload">
                <div class="row board-row2">
                    <div class="col-md-3 pt-3">
                        <b>Uploads</b>
                        <div>Property Description</div>
                        <div class="d-flex justify-content-start bg-eae p-2 mt-2 mb-3">
                            <div>
                                <i class="pdf-icon"></i>
                            </div>
                            <div class="align-self-center">
                                <h3>File</h3>
                                <h3>Name</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pt-3">
                        <div class="d-flex flex-row storyboard-form">
                            <div><input type="text" name="" class="form-control" placeholder="Template"></div>
                            <div>
                                <select class="form-control">
                                    <option value="">#18 &lt;default&gt;</option>
                                </select>
                            </div>
                            <div class="mx-2">
                                <button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-3">
                                    <i class="standard-video sv-save"></i> <b>SAVE</b>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row board-row2">
                    <div class="col-md-3 py-3">
                        <div class="picture-uploader">
                            <h3>Picture</h3>
                            <h3>+</h3>
                            <h3>Uploader</h3>
                        </div>
                    </div>
                    <div class="col-md py-3">
                        <div class="d-flex justify-content-start board-data">
                            <div class="p-2"><b>VOICE Identification #</b></div>
                            <div></div>
                        </div>
                        <div class="d-flex justify-content-start board-data my-2">
                            <div class="p-2"><b>MUSIC Identification #</b></div>
                            <div></div>
                        </div>
                        <div class="d-flex justify-content-start board-data">
                            <div class="p-2"><b>VOICE Identification #</b></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="row board-row">
                    <div class="col-md-3">
                        <div class="bg-efefef p-2 color-333"><b>Picture 1</b></div>
                        <img src="{{ asset('storage/manual-video-sample.jpg') }}" >
                    </div>
                    <div class="col-md">
                        <div class="d-flex justify-content-start board-title">
                            <div class="bg-efefef p-2 color-333"><b>Introductory Statement</b></div>
                            <div class="border-data p-2">Audio.File Identification</div>
                        </div>
                        
                        <div class="border-data my-3 px-3 height-65">here</div>
                        <select class="form-control">
                            <option value="">No Statement</option>
                        </select>
                    </div>
                </div>
                <div class="row board-row">
                    <div class="col-md-3">
                        <div class="bg-efefef p-2 color-333"><b>Picture 2</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                    </div>
                    <div class="col-md">
                        <div class="d-flex justify-content-start board-title">
                            <div class="bg-efefef p-2 color-333"><b>General Statement About Property</b></div>
                            <div class="border-data d-flex justify-content-between">
                                <div class="p-2">Audio.File Identification</div>
                                <div class="border-data2"> &nbsp; </div>
                            </div>
                        </div>
                        
                        <div class="border-data my-3 px-3 height-65">here</div>
                        <select class="form-control">
                            <option value="">No Statement</option>
                        </select>
                    </div>
                </div>
                <div class="row board-row">
                    <div class="col-md-3">
                        <div class="bg-efefef p-2 color-333"><b>Picture 3</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                    </div>
                    <div class="col-md">
                        <div class="d-flex justify-content-start board-title">
                            <div class="bg-efefef p-2 color-333"><b>Linked General Statement About Property</b></div>
                            <div class="border-data d-flex justify-content-between">
                                <div class="p-2">Audio.File Identification</div>
                                <div class="border-data2"> &nbsp; </div>
                            </div>
                        </div>
                        
                        <div class="border-data my-3 px-3 height-65">here</div>
                        <select class="form-control">
                            <option value="">No Statement</option>
                        </select>
                    </div>
                </div>
                <div class="row board-row">
                    <div class="col-md-3">
                        <div class="bg-efefef p-2 color-333"><b>Picture 4</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                    </div>
                    <div class="col-md">
                        <div class="d-flex justify-content-start board-title">
                            <div class="bg-efefef p-2 color-333"><b>Layout Property Style Statement</b></div>
                            <div class="border-data d-flex justify-content-between">
                                <div class="p-2">Audio.File Identification</div>
                                <div class="border-data2"> &nbsp; </div>
                            </div>
                        </div>
                        
                        <div class="border-data my-3 px-3 height-65">here</div>
                        <select class="form-control">
                            <option value="">No Statement</option>
                        </select>
                    </div>
                </div>
                <div class="row board-row">
                    <div class="col-md-3">
                        <div class="bg-efefef p-2 color-333"><b>Picture 5</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                    </div>
                    <div class="col-md">
                        <div class="d-flex justify-content-start board-title">
                            <div class="bg-efefef p-2 color-333"><b>Key Feature Statement</b></div>
                            <div class="border-data d-flex justify-content-between">
                                <div class="p-2">Audio.File Identification</div>
                                <div class="border-data2"> &nbsp; </div>
                            </div>
                        </div>
                        
                        <div class="border-data my-3 px-3 height-65">here</div>
                        <select class="form-control">
                            <option value="">No Statement</option>
                        </select>
                    </div>
                </div>
                <div class="row board-row">
                    <div class="col-md-3">
                        <div class="bg-efefef p-2 color-333"><b>Picture 6</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                    </div>
                    <div class="col-md">
                        <div class="d-flex justify-content-start board-title">
                            <div class="bg-efefef p-2 color-333"><b>Linked Key Feature Statement 1</b></div>
                            <div class="border-data d-flex justify-content-between">
                                <div class="p-2">Audio.File Identification</div>
                                <div class="border-data2"> &nbsp; </div>
                            </div>
                        </div>
                        
                        <div class="border-data my-3 px-3 height-65">here</div>
                        <select class="form-control">
                            <option value="">No Statement</option>
                        </select>
                    </div>
                </div>
                <div class="row board-row">
                    <div class="col-md-3">
                        <div class="bg-efefef p-2 color-333"><b>Picture 7</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                    </div>
                    <div class="col-md">
                        <div class="d-flex justify-content-start board-title">
                            <div class="bg-efefef p-2 color-333"><b>Linked Key Feature Statement 2</b></div>
                            <div class="border-data d-flex justify-content-between">
                                <div class="p-2">Audio.File Identification</div>
                                <div class="border-data2"> &nbsp; </div>
                            </div>
                        </div>
                        
                        <div class="border-data my-3 px-3 height-65">here</div>
                        <select class="form-control">
                            <option value="">No Statement</option>
                        </select>
                    </div>
                </div>
                <div class="row board-row">
                    <div class="col-md-3">
                        <div class="bg-efefef p-2 color-333"><b>Picture 8</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                    </div>
                    <div class="col-md">
                        <div class="d-flex justify-content-start board-title">
                            <div class="bg-efefef p-2 color-333"><b>Uniqueness Statement</b></div>
                            <div class="border-data d-flex justify-content-between">
                                <div class="p-2">Audio.File Identification</div>
                                <div class="border-data2"> &nbsp; </div>
                            </div>
                        </div>
                        
                        <div class="border-data my-3 px-3 height-65">here</div>
                        <select class="form-control">
                            <option value="">No Statement</option>
                        </select>
                    </div>
                </div>
                <div class="row board-row">
                    <div class="col-md-3">
                        <div class="bg-efefef p-2 color-333"><b>Picture 9</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                    </div>
                    <div class="col-md">
                        <div class="d-flex justify-content-start board-title">
                            <div class="bg-efefef p-2 color-333"><b>Linked Uniqueness Statement</b></div>
                            <div class="border-data d-flex justify-content-between">
                                <div class="p-2">Audio.File Identification</div>
                                <div class="border-data2"> &nbsp; </div>
                            </div>
                        </div>
                        
                        <div class="border-data my-3 px-3 height-65">here</div>
                        <select class="form-control">
                            <option value="">No Statement</option>
                        </select>
                    </div>
                </div>
                <div class="row board-row">
                    <div class="col-md-3">
                        <div class="bg-efefef p-2 color-333"><b>Picture 10</b></div>
                        <img src="{{ asset('storage/manual-video-default.jpg') }}" >
                    </div>
                    <div class="col-md">
                        <div class="d-flex justify-content-start board-title">
                            <div class="bg-efefef p-2 color-333"><b>Closing Statement with Call to Action</b></div>
                            <div class="border-data d-flex justify-content-between">
                                <div class="p-2">Audio.File Identification</div>
                                <div class="border-data2"> &nbsp; </div>
                            </div>
                        </div>
                        
                        <div class="border-data my-3 px-3 height-65">here</div>
                        <select class="form-control">
                            <option value="">No Statement</option>
                        </select>
                    </div>
                </div>
                <div class="row board-row2">
                    <div class="col-md-3 py-3">
                        <div class="picture-uploader">
                            <h3 class="mt-3">CLOSING</h3>
                            <h3>ANIMATION</h3>
                        </div>
                    </div>
                    <div class="col-md py-3">
                        <div class="d-flex justify-content-start board-data">
                            <div class="p-2"><b>CLOSING Identification #</b></div>
                            <div></div>
                        </div>
                        <div class="d-flex flex-row-reverse align-items-end height-90">
                            <button type="submit" class="btn btn-primary b-radius-7 bg-009900 btn-no-border px-3">
                                        <i class="standard-video sv-save"></i> <b>SAVE</b>
                            </button>
                        </div>                                      
                    </div>
                </div>
          </div>
          <div class="tab-pane fade" id="activate-video" role="tabpanel" aria-labelledby="video-tab">
                <div class="d-flex flex-column m-v-scroll p-3">
                    <div>
                        <div class="row tbl-av">
                            <div class="col-sm-7 align-self-center"><input type="text" name="" class="form-control" placeholder="address (Short Format)"></div>
                            <div class="col-sm align-self-center text-left">
                                <div class="row">
                                    <div class="col-sm">
                                        <div><b>STATUS</b></div>
                                        <div class="custom-control custom-checkbox open">
                                                <input type="checkbox" class="custom-control-input" id="customOpen">
                                                <label class="custom-control-label pl-3" for="customOpen">OPEN</label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div> &nbsp; </div>
                                        <div class="custom-control custom-checkbox closed">
                                                <input type="checkbox" class="custom-control-input" id="customClosed">
                                                <label class="custom-control-label pl-3" for="customClosed">CLOSED</label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <b>MY VIDEOS</b>
                                        <div class="custom-control custom-checkbox on-off">
                                                <input type="checkbox" class="custom-control-input" id="customON">
                                                <label class="custom-control-label pl-3" for="customON">ON/OFF</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <b>Video Template (No Subtitles)</b>
                        <div class="row m-r-l">
                                <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-rev"></i></div>
                                <div class="col-sm">
                                    <div>URL location</div>
                                    <div><input type="text" name="" class="form-control"></div>
                                </div>
                        </div>
                        <div class="row m-r-l">
                                <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-yt"></i></div>
                                <div class="col-sm">
                                    <div>URL location</div>
                                    <div><input type="text" name="" class="form-control"></div>
                                </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <b>Video Template (Subtitles)</b>
                        <div class="row m-r-l">
                                <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-rev"></i></div>
                                <div class="col-sm">
                                    <div>URL location</div>
                                    <div><input type="text" name="" class="form-control"></div>
                                </div>
                        </div>
                        <div class="row m-r-l">
                                <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-yt"></i></div>
                                <div class="col-sm">
                                    <div>URL location</div>
                                    <div><input type="text" name="" class="form-control"></div>
                                </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <b>Video No-Template (Subtitles)</b>
                        <div class="row m-r-l">
                                <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-rev"></i></div>
                                <div class="col-sm">
                                    <div>URL location</div>
                                    <div><input type="text" name="" class="form-control"></div>
                                </div>
                        </div>
                        <div class="row m-r-l">
                                <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-yt"></i></div>
                                <div class="col-sm">
                                    <div>URL location</div>
                                    <div><input type="text" name="" class="form-control"></div>
                                </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <b>Video No-Template (No Subtitles)</b>
                        <div class="row m-r-l">
                                <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-rev"></i></div>
                                <div class="col-sm">
                                    <div>URL location</div>
                                    <div><input type="text" name="" class="form-control"></div>
                                </div>
                        </div>
                        <div class="row m-r-l">
                                <div class="col-md-auto align-self-center pt-1"><i class="a-s-icons a-s-icons-yt"></i></div>
                                <div class="col-sm">
                                    <div>URL location</div>
                                    <div><input type="text" name="" class="form-control"></div>
                                </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
    </div>

@endsection