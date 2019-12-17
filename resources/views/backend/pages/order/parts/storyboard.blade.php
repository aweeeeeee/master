<div class="row">
    <div class="col-sm">
        <div class="storyboard-title my-3"><b>Main Template</b></div>
        <img class="img-fluid w-100 p-0" src={{ asset('storage/blank-template.jpg') }} />
        <div class="row mt-3">
            <div class="col-sm align-self-center">
                <b>Colour Selector</b>
                <div class="d-flex flex-row colour-width">
                     <div class="circle-area bg-6600cc"></div>
                     <div>#6600cc</div>
                     <div class="circle-area bg-333"></div>
                     <div>#333333</div>
                </div>

            </div>
            <div class="col-sm-auto align-self-center">
                 <button type="submit" class="btn btn-primary b-radius-7 btn-no-border px-2 bg-0066ff">
                        <i class="standard-video sv-export"></i><b>EXPORT</b>
                 </button>
            </div>
        </div>
    </div>
    <div class="col-sm">
        <div class="storyboard-title my-3"><b>End Template</b></div>
        <img class="img-fluid w-100 p-0" src={{ asset('storage/blank-template.jpg') }} />
        <div class="row mt-3">
            <div class="col-sm align-self-center">
                <b>Colour Selector</b>
                <div class="d-flex flex-row colour-width">
                     <div class="circle-area bg-6600cc"></div>
                     <div>#6600cc</div>
                     <div class="circle-area bg-333"></div>
                     <div>#333333</div>
                </div>

            </div>
            <div class="col-sm-auto align-self-center">
                 <button type="submit" class="btn btn-primary b-radius-7 btn-no-border px-2 bg-0066ff">
                        <i class="standard-video sv-export"></i><b>EXPORT</b>
                 </button>
            </div>
        </div>
    </div>
</div>
<div class="board-upload mt-3">
                <div class="row board-row2">
                    <div class="col-md-3">
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
                <div class="row board-row mt-3">
                    <div class="col-md-3">
                        <div class="picture-uploader mb-0">
                            <input type="file" style="display:none;" id="inputfile" name="filename[]" multiple="">
                            <a href="">
                                <h3>Picture</h3>
                                <h3>+</h3>
                                <h3>Uploader</h3>
                            </a>
                        </div>
                        
                    </div>
                    <div class="col-md">
                          <div class="d-flex flex-column storyboard-list">
                            <div>
                                <div class="d-flex justify-content-start board-data">
                                    <div class="p-2"><b>VOICE Identification #</b></div>
                                    <div>
                                        <select class="form-control">
                                            <option value="">data</option>
                                        </select>
                                    </div>
                                    <div class="align-self-center text-center px-4">Client Selected</div>
                                </div>
                                <div class="d-flex justify-content-start board-data my-2">
                                    <div class="p-2"><b>MUSIC Identification #</b></div>
                                    <div class="p-2">text</div>
                                </div>
                                <div class="d-flex justify-content-start board-data">
                                    <div class="p-2"><b>VOICE Identification #</b></div>
                                    <div class="p-2">text</div>
                                </div>
                            </div>
                          </div>
                        </div>
                </div>
                <div class="d-flex justify-content-between my-3">
                        <div class="d-flex flex-row">
                            <div class="custom-control custom-checkbox tbl-pay">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox">
                                <label class="custom-control-label px-2" for="customcheckbox">Sales</label>
                            </div>
                            <div class="custom-control custom-checkbox tbl-pay">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox2">
                                <label class="custom-control-label px-2" for="customcheckbox2">Rentals</label>
                            </div>
                            <div class="custom-control custom-checkbox tbl-pay">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox3">
                                <label class="custom-control-label px-2" for="customcheckbox3">Land/Auction</label>
                            </div>
                            <div class="custom-control custom-checkbox tbl-pay">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox4">
                                <label class="custom-control-label px-2" for="customcheckbox4">Music Only</label>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary b-radius-7 btn-no-border px-2 bg-009900">Save</button>
                            <button type="submit" class="btn btn-primary b-radius-7 btn-no-border px-2 bg-009900">Approve</button>
                        </div>
                </div>
                <div>
                    <ul class="nav nav-tabs" id="sub-nav-tabs" role="tablist">
                          <li class="nav-item nav-link active">
                             <div class="custom-control custom-checkbox tbl-pay d-inline-block pl-3">
                                    <input type="checkbox" class="custom-control-input" id="customcheckboxupsize">
                                    <label class="custom-control-label px-2" for="customcheckboxupsize"></label>
                              </div>
                              <a class="d-inline-block" id="Upsize90-tab" data-toggle="tab" href="#upsize" role="tab" aria-controls="Upsize90" aria-selected="true">Upsize90</a>
                          </li>
                          <li class="nav-item nav-link">
                              <div class="custom-control custom-checkbox tbl-pay d-inline-block pl-3">
                                    <input type="checkbox" class="custom-control-input" id="customcheckboxmain">
                                    <label class="custom-control-label px-2" for="customcheckboxmain"></label>
                              </div>
                            <a class="d-inline-block"  id="Main60-tab" data-toggle="tab" href="#Main" role="tab" aria-controls="Main60" aria-selected="false">Main60</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="HomeOpen-tab" data-toggle="tab" href="#HomeOpen" role="tab" aria-controls="Main60" aria-selected="false">Home Open</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="NewPrice-tab" data-toggle="tab" href="#NewPrice" role="tab" aria-controls="NewPrice" aria-selected="false">New Price</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="Sold-tab" data-toggle="tab" href="#Sold" role="tab" aria-controls="Sold" aria-selected="false">Sold</a>
                          </li>
                    </ul>
                </div>
  
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade show active" id="upsize" role="tabpanel" aria-labelledby="Upsize90-tab">
                        @include('backend.pages.order.parts.storyboard.storyboard-data')
                  </div>
                  <div class="tab-pane fade" id="Main" role="tabpanel" aria-labelledby="Main60-tab">
                        @include('backend.pages.order.parts.storyboard.storyboard-data-2')
                  </div>
                  <div class="tab-pane fade" id="HomeOpen" role="tabpanel" aria-labelledby="HomeOpen-tab">
                       data3
                  </div>
                  <div class="tab-pane fade" id="NewPrice" role="tabpanel" aria-labelledby="NewPrice-tab">
                        data4
                  </div>
                  <div class="tab-pane fade" id="Sold" role="tabpanel" aria-labelledby="Sold-tab">
                        data5
                  </div>
                  <div class="tab-pane fade" id="Auction90" role="tabpanel" aria-labelledby="Auction90-tab">
                        data6
                  </div>
                  <div class="tab-pane fade" id="Auction60" role="tabpanel" aria-labelledby="Auction60-tab">
                        data7
                  </div>
                  <div class="tab-pane fade" id="Land" role="tabpanel" aria-labelledby="Land-tab">
                        data8
                  </div>
                </div>
                <script type="text/javascript">
                    function SelectionMenu(){
                         $( "#sub-nav-tabs li:first-child,#sub-nav-tabs li:nth-child(2)" ).removeClass('active');

                    }
                    $( "#Upsize90-tab" ).click(function() {
                            SelectionMenu();
                        $( "#sub-nav-tabs li:first-child" ).addClass('active');

                    });
                    $( "#Main60-tab" ).click(function() {
                        SelectionMenu();
                        $( "#sub-nav-tabs li:nth-child(2)" ).addClass('active');
                    });
                    $( "#sub-nav-tabs li a.nav-link" ).click(function() {
                        SelectionMenu();
                    });
                </script>

