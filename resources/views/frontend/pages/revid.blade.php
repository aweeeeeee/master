@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-2" id="content">
        <div class="border-bot3 pb-4">
            <h1 class="c-6600cc">What is REVid?</h1>
            <div class="row">
               <div class="col-md-auto"><a href=""><img src={{ asset('storage/what-is-revid.jpg') }} /></a></div>
               <div class="col-sm-3 line-height18">
                    <ul class="list ml-4 text-justify">
                        <li><b>We turn your online listings into Video</b> so you can use them in social media, online, marketing and display presentations.</li>  
                        <li class="mb-0">Low Cost</li>
                        <li class="mb-0">Easy no Fuss</li>
                        <li class="mb-0">Fast</li>
                    </ul>
               </div>
               <div class="col-sm line-height20 px-5">
                    <ul class="list">
                        <li><b>Valuable</b>; you  get  4  video  formats  fully  hosted</li>
                        <li>Plus <img class="img-fluid" src={{ asset('storage/driveby.jpg') }}>
                            <br><bR>
                            Included with your subscription plans <br>
                            (Coming soon in 2019)
                        </li>
                    </ul>
                    
               </div>
            </div>
        </div>

      @include('frontend.pages.frontpage.info')
      
      @include('frontend.register.register-join-info')
        
      @include('frontend.register.register-info')
        
      @include('frontend.register.register-form')
        
    </div>
    
    @include('frontend.pages.frontpage.why-use-revid')

    @include('frontend.pages.frontpage.footer')

@endsection
