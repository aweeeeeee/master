<footer class="pt-4 pb-1 bg-dark">
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
                
      </div>
</footer>
<div class="container py-4 marketing-container">
    <div class="row">
        <div class="col-sm"><a href="/"><img class="img-fluid" src={{ asset('storage/revid-footer-logo.png') }} /></a></div>
        <div class="col-sm">
            <div class="row mt-3">
                <div class="col-md text-center">
                    <a href=""><i class="c-icon mc-icon"></i></a>
                    <div><a href="">Marketing <br>Centre</a></div>
                </div>
                <div class="col-md text-center">
                    <a href=""><i class="c-icon th-icon"></i></a>
                    <div><a href="">Tips and <br>Hints</a></div>
                </div>
                <div class="col-md text-center">
                    <a href=""><i class="c-icon ac-icon"></i></a>
                    <div><a href="">Artwork <br>Centre</a></div>
                </div>
            </div>
        </div>
        <div class="col-sm"><a href="/"><img class="img-fluid" src={{ asset('storage/driveby-footer-logo.png') }} /></a></div>
    </div>
</div>
<footer class="py-3 bg-dark">
    <div class="container">
        <div class="row color-ffffff">
            <div class="col-sm align-self-center">
                REVid Systems Pty Ltd 2019<br>info@revid.com.au
            </div>
            <div class="col-sm">
                    <div class="d-flex flex-row mx-3">
                        <div class="mx-1"><a href=""><i class="medium-icons m-fb"></i></a></div>
                        <div class="mx-1"><a href=""><i class="medium-icons m-instag"></i></a></div>
                        <div class="mx-1"><a href=""><i class="medium-icons m-twtr"></i></a></div>
                        <div class="mx-1"><a href=""><i class="medium-icons m-ytb"></i></a></div>
                        <div class="mx-1"><a href=""><i class="medium-icons m-in"></i></a></div>
                    </div>
            </div>
            <div class="col-sm text-right align-self-center">
                Terms and Conditions - Copyright<br>Privacy Policy - Contact
            </div>
        </div>
    </div>
</footer>