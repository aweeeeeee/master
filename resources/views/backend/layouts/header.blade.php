<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-internal.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="header-internal pt-4 pb-2">
        <div class="content">
            @if (Request::segment(1) == 'user-system')
                <div class="d-flex justify-content-end mx-1">
                        <div class="d-flex justify-content-start">
                             <div><a href="" class="nav-item">Log Out</a></div>
                             <div class="mx-2"><i class="menu-icon logout"></i></div>
                        </div>
                </div>
            @endif
            <div class="row">
                <div class="col-md">
                    <a class="navbar-brand" href="#"><img class="img-fluid" src={{ asset('storage/revid-icon-v3.png') }} /></a>
                </div>
                <div clas="col-md">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <div><i class="menu-icon vs"></i></div>
                            <a class="nav-link" href="#">
                                <div>Video</div>
                                <div>System</div>
                            </a>
                          </li>
                          <li class="nav-item">
                            <div><i class="menu-icon us"></i></div>
                            <a class="nav-link" href="#">
                              <div>User</div>
                              <div>System</div>
                            </a>
                          </li>
                          <li class="nav-item">
                            <div><i class="menu-icon mngr"></i></div>
                            <a class="nav-link" href="#">Manager</a>
                          </li>
                        </ul>
                      </div>
                    </nav>
                </div>
                <div class="col-md-auto font-weight-bold">
                    <div>Welcome to</div>
                    <div><h3>ALFRED</h3></div>
                    <div>REVid Internal Systems</div>
                </div>
            </div>
            @if (Request::segment(1) == 'video-action')
                <div class="d-flex justify-content-end mx-1">
                        <div class="d-flex justify-content-start">
                             <div><a href="" class="nav-item">Log Out</a></div>
                             <div class="mx-2"><i class="menu-icon logout"></i></div>
                        </div>
                </div>
            @else <br> @endif
        </div>
    </div>
  @yield('content')

