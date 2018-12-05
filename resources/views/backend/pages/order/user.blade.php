@extends('backend.layouts.main')

@section('content')
    <div class="search-container">
        <div class="content">
            @include('backend.pages.order.parts.search')
        </div>
    </div>
   
    <div class="content">
        
        @include('backend.pages.order.parts.user-form')
        
        <ul class="nav nav-tabs-user" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="video-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="true">Videos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false">Account Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings + Preferences</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="billing-tab" data-toggle="tab" href="#billing" role="tab" aria-controls="settings" aria-selected="false">Billing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="settings" aria-selected="false">Security</a>
              </li>
        </ul>
        <div class="tab-content mb-5" id="myTabContent">
          <div class="tab-pane fade show active p-3 user-btn" id="videos" role="tabpanel" aria-labelledby="video-tab">
                @include('backend.pages.order.parts.videos-tab')
          </div>
          <div class="tab-pane fade p-3 storyboard-tab" id="account" role="tabpanel" aria-labelledby="account-tab">
                @include('backend.pages.order.parts.account-tab')
          </div>
          <div class="tab-pane fade p-3 storyboard-tab" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                @include('backend.pages.order.parts.settings-tab')
          </div>
          <div class="tab-pane fade p-3" id="billing" role="tabpanel" aria-labelledby="billing-tab">
                @include('backend.pages.order.parts.billing-tab')
          </div>
          <div class="tab-pane fade p-3" id="security" role="tabpanel" aria-labelledby="security-tab">
                @include('backend.pages.order.parts.security-tab')
          </div>
        </div>
    </div>
@endsection