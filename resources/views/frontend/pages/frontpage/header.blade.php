  <div class="frontpage-header container mb-4">
      <div class="row">
          <div class="col-md h-col-1">
            <a href="/"><img class="img-fluid" src={{ asset('storage/revid-icon-v3.png') }} /></a>
            <form class="frontpage-login mt-2" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                        <h3>Existing Users</h3>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" Placeholder="Email Login" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                             @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                             <input id="password" type="password" class="form-control" name="password" Placeholder="Password"  required>

                             @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                             @endif
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary"><b>GO</b></button>
                        </div>
            </form>
          </div>
          <div class="col-sm mt-4">
              <div class="h-col-2 p-3 h-100">
                    <div class="row mx-0">
                        <div class="col text-center pl-0 pr-1">
                            <div class="col-bg pt-3 pb-2 h-100">
                                <a href=""><i class="f-video-icon f-pricing"></i></a>
                                <h3><a href="/pricing">Pricing</a></h3>
                            </div>
                        </div>
                        <div class="col text-center pr-0 pl-1 h-100">
                            <div class="col-bg pt-3 pb-2">
                                <a href=""><i class="f-video-icon f-quick"></i></a>
                                <h3><a href="/lets-get-started/1" data-toggle="modal" data-target="#QuickModalCenter">Quick Order</a></h3>

                            </div>
                        </div>
                      </div>
                      <h2>No Fuss <br>Real Estate <br>Videos</h2>
              </div>
          </div>
          <div class="col-sm mt-4">
            <div class="h-col-3 h-100">
                <h3 class="text-center py-2"><b>JOIN TODAY FOR FREE</b></h3>
                <div class="fv-mobile">
                     @include('frontend.pages.frontpage.firstvideo.mobile-view')
                </div>
                <div class="fv-web">
                     @include('frontend.pages.frontpage.firstvideo.tablet-web')
                </div>
            </div>
          </div>
          <div class="modal fade" id="QuickModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img class="img-fluid" src={{ asset('storage/quick-order-logo.jpg') }} />
                                        <div class="border-bot5"><span class="w-100">Cost</span></div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <div>Video</div>
                                            <div>$99.00</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div>gst</div>
                                            <div class="border-bot5 pl-4">$9.90</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                Total<br>
                                                incl GST
                                            </div>
                                            <div class="border-bot5 pl-1 align-self-center py-2"><b>$108.90</b></div>
                                        </div>
                                    </div>  
                                    <div class="col-sm">
                                        <form class="register-form quick-order-form">
                                            <input type="text" class="form-control w-100" placeholder="Add Your Email">
                                            <input type="text" class="form-control w-100 my-3" placeholder="Property Websute Listing URL (address)">
                                            <textarea col="10" rows="10" class="form-control w-100" placeholder="Comments or Instructions Here"></textarea>
                                            <div class="d-flex justify-content-between my-3">
                                                <div>
                                                    <b>Order My Video Now;</b>
                                                    <div>See <a href="" class="font-weight-normal">Terms and Conditions</a></div>
                                                </div>
                                                <div><button type="submit" class="btn btn-primary b-radius-7 btn-no-border px-4"><b>GO</b></button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
      </div>
  </div>