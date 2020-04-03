<ul class="my-account-side">
    <li>
        <div class="d-inline-block align-top">
            <img src="{{ asset('storage/my-account-icon.jpg') }}">
        </div>
        <div class="d-inline-block">
            <span><b><!--{{ Auth::user()->name }}--> F’Name L’Name</b></span><br>
            <div class="account-position">Agency Group</div>
            <div class="account-position">Name of Agency</div>
        </div>
    </li>
    <li>
        <i class="account-icon my-creator @if (Request::segment(2) == 'video-creator') {{'my-creator-active'}} @else {{'my-creator'}} @endif"></i>
        <a href="/account/video-creator/make-video" class="@if (Request::segment(2) == 'video-creator') {{'c-ff0033'}} @endif">Make Video</a>
    </li>
    <li>
        <i class="account-icon @if (Request::segment(2) == 'videos') {{'my-videos-active'}} @else {{'my-videos'}} @endif"></i>
        <a href="/account/videos" class="@if (Request::segment(2) == 'videos') {{'c-ff0033'}} @endif">My Videos</a>
    </li>
    <li>
        <i class="account-icon my-tracker @if (Request::segment(2) == 'video-tracker') {{'my-tracker-active'}} @else {{'my-tracker'}} @endif"></i>
        <a href="/account/video-tracker" class="@if (Request::segment(2) == 'video-tracker') {{'c-ff0033'}} @endif">My Video Tracker</a>
    </li>
    <li>
        <i class="account-icon @if (Request::segment(2) == 'home') {{'my-account-active'}} @else {{'my-account'}} @endif"></i>
        <a href="/account/home" class="@if (Request::segment(2) == 'home') {{'c-ff0033'}} @endif">My Account</a>
    </li>
    <li>
        <i class="account-icon @if (Request::segment(2) == 'settings') {{'my-settings-active'}} @else {{'my-settings'}} @endif"></i>
        <a data-toggle="collapse">My Settings</a>
        <div>
            <div class="d-flex flex-column setting-sidebar">
                <div class="mt-2"><a href="/account/settings/template" class="@if (Request::segment(3) == 'template') {{'c-ff0033'}} @endif">Templates</a></div>
                <div class="my-3"><a href="/account/settings/explore-pictures" class="@if (Request::segment(3) == 'explore-pictures') {{'c-ff0033'}} @endif">Pictures</a></div>
                <div><a href="/account/settings/voice-overs-voice" class="@if (Request::segment(3) == 'voice-overs-voice') {{'c-ff0033'}} @endif">Voice Overs</a></div>
                <div class="my-3"><a href="/account/settings/voice-overs-music" class="@if (Request::segment(3) == 'voice-overs-music') {{'c-ff0033'}} @endif">Music Selection</a></div>
            </div>
        </div>
    </li>
    <li>
        <i class="account-icon my-preferences @if (Request::segment(2) == 'preferences') {{'my-preferences-active'}} @else {{'my-preferences'}} @endif"></i>
        <a href="/account/preferences/" class="@if (Request::segment(2) == 'preferences') {{'c-ff0033'}} @endif">My Preferences</a>
    </li>
    <li>
        <i class="account-icon @if (Request::segment(2) == 'page') {{'my-marketing-active'}} @else {{'my-marketing'}} @endif"></i>
        <a href="/account/preferences/" class="@if (Request::segment(2) == 'page') {{'c-ff0033'}} @endif">Marketing Centre</a>
    </li>
    <li>
        <i class="account-icon my-preferences @if (Request::segment(2) == 'page') {{'my-artwork-active'}} @else {{'my-artwork'}} @endif"></i>
        <a href="/account/preferences/" class="@if (Request::segment(2) == 'page') {{'c-ff0033'}} @endif">Artwork Centre</a>
    </li>
    <li>
        <i class="account-icon my-preferences @if (Request::segment(2) == 'page') {{'my-tips-active'}} @else {{'my-tips'}} @endif"></i>
        <a href="/account/preferences/" class="@if (Request::segment(2) == 'page') {{'c-ff0033'}} @endif">Tips and Hints</a>
    </li>
</ul>
<nav class="my-account-menu navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/account/video-creator/make-video">Make Video</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/account/videos">My Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/account/video-tracker">My Video Tracker</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/account/home">My Account</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Settings
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/account/settings/template">Templates</a>
          <a class="dropdown-item" href="/account/settings/explore-pictures">Pictures</a>
          <a class="dropdown-item" href="/account/settings/voice-overs-voice">Voice Overs</a>
          <a class="dropdown-item" href="/account/settings/voice-overs-music">Music Selection</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/account/preferences/">My Preferences</a>
      </li>
    </ul>
  </div>
</nav>
