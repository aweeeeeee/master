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
            <h3 class="my-account-title">Custom Video - Update Template</h3>
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
            <h3 class="mb-4">Template Preferences</h3>
            Main Template (1)
            <div class="row">
                <div class="col p-0"><img class="img-fluid" src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
            </div>
            <div class="d-flex flex-row-reverse">
              <div class="p-2"><a href="">Change</a></div>
            </div>
            End Template (3)
            <div class="row">
                <div class="col p-0"><img class="img-fluid" src="{{ asset('storage/account/video-system-end-frame.jpg') }}" class="img-fluid"></div>
            </div>
            <div class="d-flex flex-row-reverse">
              <div class="p-2"><a href="">Change</a></div>
            </div>
        </div>
    </div>
</div>
@endsection