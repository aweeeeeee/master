@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
         @guest
            <h3 class="header-border font-weight-bold color-424244">Copyright Terms</h3>
            <div class="row">
                <div class="col-2 align-self-center color-666">Version 1.1</div>
                <div class="col-3 align-self-center color-666">Dated 1 Jan 2018</div>
                <div class="col-2 align-self-center color-666"><i class="dl-pdf"></i> Download PDF</div>
                <div class="col-sm align-self-center text-right">
                    <div class="d-flex justify-content-end">
                      <div class="p-2"><div class="arrow-prev"></div></div>
                      <div class="pl-0 pr-2 py-2">Page</div>
                      <div class="my-2 arrow-data text-center">1</div>
                      <div class="p-2">of</div>
                      <div class="my-2 arrow-data text-center">52</div>
                      <div class="py-2 pl-2"><div class="arrow-next"></div></div>
                    </div>
                </div>
            </div>
        @else
             <div class="row m-0">
                <div class="col-sm-4 pr-4 pl-0">
                    <div class="border-bot3 pb-4 mb-2">
                        <div class="d-inline-block align-top">
                            <img src="{{ asset('storage/my-account-icon2.jpg') }}">
                        </div>
                        <div class="d-inline-block">
                            <h4 class="font-weight-bold color-424244">{{ Auth::user()->name }}</h4>
                            <div class="account-position line-height20">Professionals Real Estate <br>Bassendean</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="border-bot3 mb-2">
                        <h4 class="font-weight-bold color-424244 mb-1">Copyright Terms</h4>
                        <div class="row mt-4 mb-3">
                            <div class="col-sm-3 align-self-center color-666">Version 1.1</div>
                            <div class="col-sm-3 align-self-center color-666">Dated 1 Jan 2018</div>
                            <div class="col-sm align-self-center color-666"><i class="dl-pdf"></i> Download PDF</div>
                        </div>
                    </div>
                </div>
            </div>
        @endguest
       
        <div class="border-999">
            <b>COPYRIGHT TERMSS</b>
            <br><br>
            <p class="text-justify"><b>Lorem ipsum dolor sit amet consectetuer adipiscing elit, sed diam nonummy nibh</b>
            <br><br>
            Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
            nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
            Ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
            ea commodo consequat.
            <br><br>
            <b>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</b><br><br>
            Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis
            dolore te feugait nulla facilisi.</p>
        </div>
    </div>

        @include('frontend.pages.frontpage.footer')

@endsection
