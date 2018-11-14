@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title">Automatic Video Order</h3>
            <form class="a-v-order">
                <div class="row m-r-l mb-3">
                    <div class="col-sm-3">URL Reference</div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="www..." name="" required autofocus>
                    </div>
                </div>
                <div class="row m-r-l my-3">
                    <div class="col-sm-3">Action Receipt #</div>
                    <div class="col-sm-9">
                         Your Video Number is<br>
                         <div class="form-control b-radius-0 text-right mt-3">XXXX</div>
                    </div>
                </div>
                <div class="row m-r-l">
                    <div class="col-sm-3">Video Production</div>
                    <div class="col-sm-9">
                        <div class="row m-0">
                            <div class="col-sm-8 pl-0">
                                 <b>Automatic Video</b>
                                 <div class="my-2">Estimated completion time is</div>
                            </div>
                            <div class="col-sm-4 align-self-center">
                                <div class="row m-0">
                                    <div class="col-sm align-self-center p-0"><div class="form-control b-radius-0">$</div></div>
                                    <div class="col-sm-5 my-account-subcription pr-0">
                                          <div class="custom-control custom-checkbox basic">
                                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                                              <label class="custom-control-label" for="customCheck2"></label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="row">
                                <div class="col-sm p-0"><div class="form-control b-radius-0">## hours</div></div>
                                <div class="col-sm p-0"><div class="form-control b-radius-0">Date Due</div></div>
                         </div>
                    </div>
                </div>
                <div class="row my-4 m-r-l">
                    <div class="col-sm-3">Surge?</div>
                    <div class="col-sm-9">
                        <p class="font-weight-bold">Do you want to SURGE?</p>
                        <div class="row">
                            <div class="col-sm pl-0">Rush</div>
                            <div class="col-sm">
                                <div class="form-control b-radius-0">2 hours</div>
                            </div>
                            <div class="col-sm">
                                 <div class="row mt-2">
                                    <div class="col-sm align-self-center text-center p-0">Add $45</div>
                                    <div class="col-sm-5 my-account-subcription pr-0">
                                          <div class="custom-control custom-checkbox basic a-v-box2">
                                              <input type="checkbox" class="custom-control-input" id="customCheck3">
                                              <label class="custom-control-label" for="customCheck3"></label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">Surge</div>
                            <div class="col-sm">
                                <div class="form-control b-radius-0">24 hours</div>
                            </div>
                            <div class="col-sm">
                                 <div class="row mt-2">
                                    <div class="col-sm align-self-center text-center p-0">Add $15</div>
                                    <div class="col-sm-5 my-account-subcription pr-0">
                                          <div class="custom-control custom-checkbox basic a-v-box2">
                                              <input type="checkbox" class="custom-control-input" id="customCheck4">
                                              <label class="custom-control-label" for="customCheck4"></label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-r-l">
                    <div class="col-sm-3">Your Preferences <br>Settings are</div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center">Company Website</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck-4">
                                                  <label class="custom-control-label" for="customCheck-4"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center">External Site #1</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Realestate.com</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                  <label class="custom-control-label" for="customCheck5"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center">External Site #2</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                  <label class="custom-control-label" for="customCheck6"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center">Facebook</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                  <label class="custom-control-label" for="customCheck13"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center">Youtube</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                  <label class="custom-control-label" for="customCheck7"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center">linkedin</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                  <label class="custom-control-label" for="customCheck8"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center">Twitter</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                  <label class="custom-control-label" for="customCheck13"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center">Google Plus</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                  <label class="custom-control-label" for="customCheck9"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="mb-4"><b>Email Distribution (on completion)</b></div>
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center">People on <br>Email List</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">On</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                  <label class="custom-control-label" for="customCheck13"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="my-4"><b>Broadcast Distribution (When Available)</b></div>
                        <div class="row">
                            <div class="col-sm pl-0">Agents in <br>Selected Suburbs</div>
                            <div class="col-sm"><div class="form-control b-radius-0">On</div></div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                  <label class="custom-control-label" for="customCheck14"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-bot3 m-r-l">
                    <div class="col-sm-3 align-self-center">Extra's</div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center"><b>DriveBy</b></div>
                            <div class="col-sm"><button type="button" class="btn btn-primary w-100 b-radius-7"><b>FREE</b></button></div>
                            <div class="col-sm">
                                <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$0</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                  <label class="custom-control-label" for="customCheck15"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-3 pl-0">Cost <br>Summary</div>
                    <div class="col-sm-9 px-0">
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center">Video</div>
                            <div class="col-sm-9 px-0">
                                 <input type="text" class="form-control cost-summary" name="" value="$75.00" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center">Surge</div>
                            <div class="col-sm-9 px-0">
                                 <input type="text" class="form-control cost-summary" name="" value="$75.00" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center">Preferences</div>
                            <div class="col-sm-9 px-0">
                                 <input type="text" class="form-control cost-summary" name="" value="$25.00" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center">Extra's</div>
                            <div class="col-sm-9 px-0">
                                 <input type="text" class="form-control cost-summary" name="" disabled value="$0.00">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center"><b>Total</b></div>
                            <div class="col-sm-9 px-0">
                                 <input type="text" class="form-control cost-summary cost-total" name="" value="$175.00" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-5">
                    <div class="align-self-center"><a href="/terms-condition">Terms and Conditions</a></div>
                    <div><button type="button" class="btn btn-primary bg-009900 btn-no-border px-4 b-radius-7"><b>CONFIRM</b></button></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
