        <h2 class="header-border font-weight-bold">
            @if (Request::segment(1) == 'pricing')
                What Does REVid Cost?
            @else 
                Select Your Plan
            @endif
        </h2>
        <p class="text-justify color-000">
            You have 4 plans to pick from. Please  <span class="h4">&#9745;</span> Select your plan below. Subscription plans are on a month-by-month basis and cover your video
            storage and access services. Extra to your plan is the per Video cost to produce.
        </p>
        <div class="row">
            <div class="col-sm">
                <div class="pricing-data border-666666 pd-1">
                    <div class="d-flex justify-content-between">
                        <div class="align-self-center">
                            <div class="custom-control custom-checkbox casual m-c">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label font-weight-bold" for="customCheck1">Select Casual</label>
                            </div>
                        </div>
                        <div class="py-2 p-30 mr-3 bg-666">$0/month</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 pr-0">
                              <div class="row my-2 mx-0 pricing-content">
                                    <div class="col-sm-5">
                                        <b>Storage <br>Plan</b>
                                    </div>  
                                    <div class="col-sm-7 border-left-666">
                                        <div class="flex-row">
                                          <div>6 Months Active </div>
                                          <div>1 Month Archive</div>
                                        </div>
                                    </div>
                             </div>
                             <div class="row mt-4 mb-2 mx-0 pricing-content">
                                    <div class="col-sm-5">
                                        <b>Video <br>Costs</b>
                                    </div>  
                                    <div class="col-sm-7 pl-3 pr-0 border-left-666">
                                        <div class="flex-row">
                                              <div>
                                                 <div class="d-inline-block col-7 pl-0">Automatic</div>
                                                 <div class="d-inline-block font-t-ms pl-3"><b>$149</b></div>
                                              </div>
                                              <div>
                                                 <div class="d-inline-block col-7 pl-0">Casual</div>
                                                 <div class="d-inline-block font-t-ms pl-3"><b>$199</b></div>
                                              </div>
                                              <div>
                                                 <div class="d-inline-block col-7 pl-0">Custom</div>
                                                 <div class="d-inline-block font-t-ms pl-3"><b>$399</b></div>
                                              </div>
                                        </div>
                                    </div>
                             </div>
                        </div>
                        <div class="col-sm mr-3">
                            <div class="casual-info mt-2 ml-3 px-1 py-3 col-11 text-justify">Video will be active for 6 months from date of production and archived for a further 1 month.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="pricing-data border-006 pd-2">
                    <div class="d-flex justify-content-between">
                        <div class="align-self-center">
                            <div class="custom-control custom-checkbox casual">
                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                              <label class="custom-control-label font-weight-bold" for="customCheck2">Select Standard</label>
                            </div>
                        </div>
                        <div class="p-2 px-4 mr-3 bg-006">$66/month</div>
                    </div>
                    <div class="row my-2 mx-0 pricing-content">
                        <div class="col-sm-3">
                            <b>Storage <br>Plan</b>
                        </div>  
                        <div class="col-sm-5 pl-0">
                            <div class="flex-row border-left-006 pl-3">
                              <div>36 Videos Active </div>
                              <div>12 Months Archive</div>
                            </div>
                        </div>
                        <div class="col-sm bg-009 font-weight-bold px-3 align-self-center">FREE VIDEO<br>Every 2 Months</div>
                    </div>
                    <div class="row mt-1 mb-2 mx-0 pricing-content">
                        <div class="col-sm-3"><b>Video <br>Costs</b></div>
                        <div class="col-sm-5 border-left-006">
                            <div class="flex-row">
                              <div>
                                 <div class="d-inline-block col-7 pl-0">Automatic</div>
                                 <div class="d-inline-block color-0066ff pl-2 font-t-ms"><b>$99</b></div>
                              </div>
                              <div>
                                 <div class="d-inline-block col-7 pl-0">Manual</div>
                                 <div class="d-inline-block color-0066ff font-t-ms"><b>$139</b></div>
                              </div>
                              <div>
                                 <div class="d-inline-block col-7 pl-0">Custom</div>
                                 <div class="d-inline-block color-0066ff font-t-ms"><b>$399</b></div>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm bg-eae p-0 text-center align-self-center">
                             <img src={{ asset('storage/pricing-revid.png') }} />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm">
                <div class="pricing-box border-660 pd-3">
                   <div class="pricing-data">
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center">
                                <div class="custom-control custom-checkbox casual m-c">
                                  <input type="checkbox" class="custom-control-input" id="customCheck3">
                                  <label class="custom-control-label font-weight-bold" for="customCheck3">Select Basic</label>
                                </div>
                            </div>
                            <div class="p-2 px-4 mr-3 bg-660">$33/month</div>
                        </div>
                        <div class="row my-2 mx-0 pricing-content">
                            <div class="col-sm-3">
                                <b>Storage <br>Plan</b>
                            </div>  
                            <div class="col-sm-5 pl-0">
                                <div class="flex-row border-left-660 pl-3">
                                  <div>12 Videos Active </div>
                                  <div>12 Months Archive</div>
                                </div>
                            </div>
                            <div class="col-sm bg-009 px-3 font-weight-bold align-self-center">FREE VIDEO<br>Every 3 Months</div>
                        </div>
                        <div class="row mt-1 mb-2 mx-0 pricing-content">
                            <div class="col-sm-3"><b>Video <br>Costs</b></div>
                            <div class="col-sm-5 border-left-660">
                                <div class="flex-row">
                                  <div>
                                     <div class="d-inline-block col-7 pl-0">Automatic</div>
                                     <div class="d-inline-block c-6600cc pl-2 font-t-ms"><b>$99</b></div>
                                  </div>
                                  <div>
                                     <div class="d-inline-block col-7 pl-0">Manual</div>
                                     <div class="d-inline-block c-6600cc font-t-ms"><b>$139</b></div>
                                  </div>
                                  <div>
                                     <div class="d-inline-block col-7 pl-0">Custom</div>
                                     <div class="d-inline-block c-6600cc font-t-ms"><b>$399</b></div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-sm bg-eae p-0 text-center align-self-center">
                                 <img src={{ asset('storage/pricing-revid.png') }} />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="pricing-data border-ff0033 pd-4">
                    <div class="d-flex justify-content-between">
                        <div class="align-self-center">
                            <div class="custom-control custom-checkbox casual">
                              <input type="checkbox" class="custom-control-input" id="customCheck4">
                              <label class="custom-control-label font-weight-bold" for="customCheck4">Select Premium</label>
                            </div>
                        </div>
                        <div class="p-2 px-4 mr-3 bg-ff0033">$99/month</div>
                    </div>
                    <div class="row my-2 mx-0 pricing-content">
                        <div class="col-sm-3">
                            <b>Storage <br>Plan</b>
                        </div>  
                        <div class="col-sm-5 pl-0">
                            <div class="flex-row border-left-ff0 pl-3">
                              <div>Unlimited Active </div>
                              <div>Unlimited Archive</div>
                            </div>
                        </div>
                        <div class="col-sm bg-009 px-4 font-weight-bold align-self-center">FREE VIDEO<br>Every Month</div>
                    </div>
                    <div class="row mt-1 mb-2 mx-0 pricing-content">
                        <div class="col-sm-3"><b>Video <br>Production <br>Costs</b></div>
                        <div class="col-sm-5 border-left-ff0">
                            <div class="flex-row">
                              <div>
                                 <div class="d-inline-block col-7 pl-0">Automatic</div>
                                 <div class="d-inline-block color-ff0033 pl-2 font-t-ms"><b>$99</b></div>
                              </div>
                              <div>
                                 <div class="d-inline-block col-7 pl-0">Manual</div>
                                 <div class="d-inline-block color-ff0033 font-t-ms"><b>$139</b></div>
                              </div>
                              <div>
                                 <div class="d-inline-block col-7 pl-0">Custom</div>
                                 <div class="d-inline-block color-ff0033 font-t-ms"><b>$399</b></div>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm bg-eae p-0 text-center align-self-center">
                             <img src={{ asset('storage/pricing-revid.png') }} />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-justify font14 mt-4 color-000">
            <span class="color-ff0033">(1)</span> $99 (including GST) Video refers to an Automatic Video on either Basic, Standard or Premium Plan. <span class="color-ff0033">(2)</span> Pricing and offers valid until 31 Dec 2018. <br>
            <span class="color-ff0033">(3)</span> Quoted pricing includes GST. <span class="color-ff0033">(4)</span> Subscription is on a month-by-month basis with 30-days notice to cancel. <span class="color-ff0033">(5)</span> See <a href="/terms-condition" class="color-ff0033"><b>Terms and Conditions</b></a>.
        </p>