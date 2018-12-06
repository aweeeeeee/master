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
                                    <div class="video-text ml-2">Bedroom</div>
                                </div>
                            </div>
                            <div class="col-sm px-0">
                                 <div class="d-flex flex-row">
                                     <div class="bg-eae p-2"><i class="d-u-icon d-u-icon-bat"></i></div>
                                     <div class="video-text ml-2">Bathroom</div>
                                 </div>
                            </div>
                            <div class="col-sm">
                                 <div class="d-flex flex-row">
                                     <div class="bg-eae p-2"><i class="d-u-icon d-u-icon-car"></i></div>
                                     <div class="video-text ml-2 w-100">Cars</div>
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
                        <td>Email</td>
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
                @include('backend.pages.order.parts.summary')
          </div>
          <div class="tab-pane fade px-3 storyboard-tab" id="storyboard" role="tabpanel" aria-labelledby="storyboard-tab">
                @include('backend.pages.order.parts.storyboard')
          </div>
          <div class="tab-pane fade" id="activate-video" role="tabpanel" aria-labelledby="video-tab">
                @include('backend.pages.order.parts.activate-video')
          </div>
        </div>
    </div>

@endsection