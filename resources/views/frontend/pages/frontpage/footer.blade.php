<footer class="py-3 bg-dark">
      <div class="container">
                  @if (Request::segment(2) != '1') 
                      <div class="footer-con">
                          <h6 class="text-center c-414 text-white"><span>JOIN TODAY,</span> and Receive 12-months <span>FREE PREMIUM Package</span></h6>
                          <form>
                              <div class="row">
                                    <div class="col-sm-8"><input type="email" class="form-control" placeholder="Add Your Email Address"></div>
                                    <div class="col-sm-4 align-self-center"><button type="submit" class="btn btn-primary">JOIN TODAY</button></div>
                              </div>
                          </form>
                      </div>
                  @endif
                  <div class="text-center footer-logo">
                      <a href="/"><img class="img-fluid" src={{ asset('storage/revid-icon.png') }} /></a>
                  </div>
                  <div class="fv-mobile">
                      <div class="row justify-content-center">
                              <div class="col-auto p-0"><a href=""><i class="social-icon2 fb2"></i></a></div>
                              <div class="col-auto p-0"><a href=""><i class="social-icon2 twt2"></i></a></div>
                              <div class="col-auto p-0"><a href=""><i class="social-icon2 in2"></i></a></div>
                              <div class="col-auto p-0"><a href=""><i class="social-icon2 chk2"></i></a></div>
                              <div class="col-auto p-0"><a href=""><i class="social-icon2 ytb2"></i></a></div>
                              <div class="col-auto p-0"><a href=""><i class="social-icon2 pin2"></i></a></div>
                      </div>
                      <div class="my-2 text-center text-white">REVid Systems Pty Ltd 2019 - <br>Terms and Conditions - Copyright - <br>Privacy Policy - Contact</div>
                  </div>
                  <div class="fv-web text-center">
                      <a href=""><i class="social-icon fb"></i></a>
                      <a href=""><i class="social-icon twt"></i></a>
                      <a href=""><i class="social-icon in"></i></a>
                      <a href=""><i class="social-icon chk"></i></a>
                      <a href=""><i class="social-icon ytb"></i></a>
                      <a href=""><i class="social-icon pin"></i></a>
                      <p class="my-2 text-center text-white">REVid Systems Pty Ltd 2019 - Terms and Conditions - Copyright - Privacy Policy - Contact</p>
                  </div>
      </div>
</footer>