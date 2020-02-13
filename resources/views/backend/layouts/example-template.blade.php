@extends('backend.layouts.main')

@section('content')
    <div class="content">
        <div class="d-flex flex-row peard-template">
            <div><img src="{{ asset('storage/Jeff-Coghill.png') }}" class="img fluid"></div>
            <div class="text-center  align-self-center">
                <img src="{{ asset('storage/peard-logo.png') }}" class="w-100">
                <div class="d-flex flex-column peard-color">
                    <div class="my-3"><b>CONTACT ME <br>TODAY!</b></div>
                    <div><b>JEFF COGHILL</b></div>
                    <div>0412 928 643</div>
                    <div>(08) 9270 0000</div>
                    <div class="mt-2">www.peard.com.au</div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="d-flex flex-row peard-template-2">
            <div class="align-self-end"><img src="{{ asset('storage/Jeff-Coghill.png') }}" class="img fluid"></div>
            <div class="text-center align-self-center w-100">
                <img src="{{ asset('storage/peard-logo.png') }}">
                <div class="d-flex flex-column peard-color-2">
                    <div class="my-5"><b>CONTACT ME <br>TODAY!</b></div>
                    <div><b>JEFF COGHILL</b></div>
                    <div>0412 928 643</div>
                    <div>(08) 9270 0000</div>
                    <div class="mt-5">www.peard.com.au</div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="d-flex flex-column agency-template">
            <div class="text-center">
                <img src="{{ asset('storage/the-agency-logo.jpg') }}" class="img-fluid col-8 py-4">
            </div>
            <div class="d-flex align-items-start">
                <div><img src="{{ asset('storage/Natalie-Kemp.jpg') }}" class="w-100 img-fluid"></div>
                <div>
                    <div class="bg-fd4640 w-100">Natalie Kemp</div>
                    <div class="h-100">
                        <div class="d-flex align-items-end h-100">
                            <div>
                                <div class="mb-3">Contact me today!</div>
                                <div>0439 615 898</div>
                                <div>nataliek@theagency.com.au</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <br><br> <br><br> <br><br>
        <div class="d-flex flex-column agency-template2">
            <div class="text-center">
                <img src="{{ asset('storage/the-agency-logo.jpg') }}" class="img-fluid col-8 py-5">
            </div>
            <div class="d-flex align-items-start">
                <div><img src="{{ asset('storage/Natalie-Kemp.jpg') }}" class="w-100 img-fluid"></div>
                <div class="">
                    <div class="bg-fd4640">Natalie Kemp</div>
                    <div>
                        <div class="d-flex align-items-end">
                            <div>
                                <div class="mb-5">Contact me today!</div>
                                <div>0439 615 898</div>
                                <div>nataliek@theagency.com.au</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br> <br><br> <br><br><br><br> <br><br> <br><br>
        
        <div class="info-agent-template-1">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-7 mx-auto text-center">
                        <div><b>test test test test</b></div>
                        <div>test test</div>
                    </div>
                </div>
            </div>
        </div>
       
        <br><br> <br><br> <br><br><br><br> <br><br> <br><br>
        
        <div class="d-flex info-agent-template-2 flex-row">
            <div><i class="d-icon d-icon-bed"></i></div>
            <div>4</div>
            <div><i class="d-icon d-icon-bat"></i></div>
            <div>3</div>
            <div><i class="d-icon d-icon-car"></i></div>
            <div>2</div>
            <div>House</div>
        </div>
        
        <br><br> <br><br> <br><br><br><br> <br><br> <br><br>
        
        <div class="d-flex flex-row info-agent-template-2 p-4">
                <div class="w-100 text-center align-self-center"><b>Contact:</b> Agent's Full Name</div>
        </div>
        
        
        <br><br> <br><br> <br><br><br><br> <br><br> <br><br>
        
        <div class="info-agent-template-full">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-10 mx-auto">
                        <div>
                            <div><b>FirstName LastName</b></div>
                            <div>Presents</div>
                        </div>
                        <div>
                            <div><b>3 Revid Street</b></div>
                            <div>Revidville 3</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <br><br> <br><br> <br><br><br><br> <br><br> <br><br>
    </div>



@endsection