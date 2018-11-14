@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form pb-5">
            <h3 class="my-account-title">My Video Tracker</h3>
            <h3 class="c-6600cc">Production Status</h3>
            <div class="table-responsive">
              <table class="table video-tracker mb-4">
                <tr>
                    <td></td>  
                    <td class="text-center"><div class="pl-4">Estimated</div></td>
                    <td><b>Progress</b></td>
                    <td class="text-center"><b>Due Date</b></td>
                </tr>
                <tr>
                    <td width="80">#XXXX</td>
                    <td width="280">63 north Rd Bassendean WA 6054</td>
                    <td width="170">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            <span>60%</span>
                        </div>
                    </td>
                    <td class="text-center">12.01.2018</td>
                </tr>
                <tr>
                    <td>#XXXX</td>
                    <td>12 north Rd Bassendean WA 6054</td>
                    <td>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            <span>70%</span>
                        </div>
                    </td>
                    <td class="text-center">12.01.2018</td>
                </tr>
                  <tr>
                    <td>#XXXX</td>
                    <td>16 north Rd Bassendean WA 6054</td>
                    <td>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            <span>50%</span>
                        </div>
                    </td>
                    <td class="text-center">12.01.2018</td>
                </tr>
              </table>
            </div>
            <h3 class="c-6600cc">Awaiting Action</h3>
            <div class="table-responsive">
              <table class="table video-tracker mb-4">
                <tr>
                    <td></td>  
                    <td class="text-right"></td>
                    <td><b>Details</b></td>
                    <td><b>Action</b></td>
                </tr>
                <tr>
                    <td width="80">#xxxx</td>
                    <td width="280">63 North Bassendean WA 6054</td>
                    <td width="170">Manual Video</td>
                    <td><a href="">< Resume ></Resume></a></td>
                </tr>
                <tr>
                    <td>#xxxx</td>
                    <td>99 Star St Bassendean WA 6054</td>
                    <td>Custom Video</td>
                    <td><a href="">< Toolset ></a></td>
                </tr>
              </table>
            </div>
            <h3 class="c-6600cc  mt-4">What is the SURGE?</h3>
            <p class="text-justify l-k-text font15">
                The Surge is a demand driven premium option for your Video production to have preferential
                delivery time within a 24-hour period (Surge) or a 2-hour period (Rush). Each time you make a
                Video Order the system will ask you if you want to Surge or Rush and tell you the
                Cost of the Day (calculated from demand statistics). Alternatively, you can select <b>SURGE ALWAYS
                ($15 per Video fixed)</b> and <b>RUSH ALWAYS ($45 per Video fixed)</b> and be guaranteed the
                preferential delivery time you want for a fixed cost – regardless of demand
            </p>
            <h3 class="c-6600cc">My preferences</h3>
            <div class="row">
                <div class="col-lg-auto px-0 pt-2">Sign Up for</div>
                <div class="col-lg p-0">
                        <div class="row m-0">
                            <div class="col-md-auto surge">
                                <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                                      <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </div>
                            <div class="col-md-auto p-0">
                                <div class="btn btn-primary surge-button bg-ff0000">SURGE ALWAYS</div>
                            </div>
                            <div class="col-md-auto line-height18 pr-0">Less than 24 hours <br>$15.00 per Video</div>
                        </div>
                        <div class="row">
                            <div class="col-md-auto surge">
                                <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                                      <label class="custom-control-label" for="customCheck2"></label>
                                </div>
                            </div>
                            <div class="col-md-auto p-0">
                                <div class="btn btn-primary surge-button bg-ff0000">RUSH ALWAYS</div>
                            </div>
                            <div class="col-md-auto line-height18">Less than 2 hours <br>$45.00 per video</div>
                        </div>
                </div>
                <div class="col-lg-3 pr-0">
                    <div class="d-flex align-items-end h-100 justify-content-end">
                        <div class="mb-3"><button type="submit" class="btn btn-primary b-radius-7 btn-no-border bg-009900"><span class="px-3"><b>APPLY</b></span></button></div>
                    </div>
                </div>
            </div>
            <div class="modal fade surge-popup" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content b-radius-0 border-ff0033-1">
                  <div class="modal-header btn-no-border pb-0">
                    <h3 class="color-ff0033">Surge My video</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body pt-0">
                            <div class="row">
                                <div class="col-sm-4 pl-0">
                                    <b>#XXXX</b><br>
                                    63 North Rd<br>
                                    Bassendean<br>
                                    WA 6054
                                </div>
                                <div class="col-sm pr-0">
                                    <div class="row">
                                        <div class="col-sm-auto p-surge-btn">
                                            <div class="custom-control custom-checkbox basic">
                                              <input type="checkbox" class="custom-control-input" id="customCheck3">
                                              <label class="custom-control-label" for="customCheck3"></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">Less than 24 hours</div>
                                        <div class="col-sm-2 c-6600cc"><b>$15</b></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-auto p-surge-btn">
                                            <div class="custom-control custom-checkbox basic">
                                              <input type="checkbox" class="custom-control-input" id="customCheck5">
                                              <label class="custom-control-label" for="customCheck5"></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">Rush 2 hours</div>
                                        <div class="col-sm-2 c-6600cc"><b>$45</b></div>
                                    </div>
                                </div>  
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="align-items-end"><a href="">Terms and Conditions</a></div>
                        <div class="mx-3"><button class="btn btn-primary bg-660 btn-no-border bg-009900 b-radius-7 px-3"><b>ACCEPT</b></button></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
    });                     
</script>
@endsection

