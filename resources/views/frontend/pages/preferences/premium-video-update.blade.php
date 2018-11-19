@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title">Premium - Update Template</h3>
            <table class="table-action mb-5" cellpadding="0" cellspacing="0" width="100%">
                <tr class="bg-eae">
                    <td><b>Video #</b></td>
                    <td><b>Address</b></td>
                </tr>
                <tr>
                    <td>#XXXX</td>
                    <td>
                        <div class="d-flex">
                          <div>63 North Rd Bassendean</div>
                          <div class="ml-auto"><a href="">Return My Tracker</a></div>
                        </div>
                    </td>
                </tr>
            </table>
            <h3 class="mb-4">Template Selection</h3>
            <h3 class="font20 my-3">Main Frame</h3>
            <div class="row">
                <div class="col p-0"><img class="img-fluid" src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
            </div>
            <div class="d-flex justify-content-between border-bot7">
                              <div>&lt;Click to Expand&gt;</div>
                              <div class="p-2"><a class="color-ff0033">Change</a></div>
            </div>
            <h3 class="font20 my-3">End Frame</h3>
            <div class="row">
                <div class="col p-0"><img class="img-fluid" src="{{ asset('storage/account/video-system-end-frame.jpg') }}" class="img-fluid"></div>
            </div>
            <div class="d-flex justify-content-between">
                              <div>&lt;Click to Expand&gt;</div>
                              <div class="p-2"><a class="color-ff0033">Change</a></div>
            </div>
        </div>
    </div>
</div>
@endsection