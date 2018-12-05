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
    <style type="text/css">
    Html, body{
        height:100%;
        margin:0px;
        padding:0px;
    }
    </style>
  <body>
    <div class="FormContaniner">
        <div class="parentContainer">
            <div class="internal-form">
                <div class="text-center px-4"><img class="img-fluid" src={{ asset('storage/revid-icon-v3.png') }} /></div>
                <form class="" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                <h3><b>Existing Users</b></h3>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" Placeholder="Email" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                     @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                     <input id="password" type="password" class="form-control" name="password" Placeholder="Password"  required>

                                     @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                     @endif
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="align-self-center"><a href="" class="color-666">Forgot Password?</a></div>
                                    <div><button type="submit" class="btn btn-primary"><b>LOG IN</b></button></div>
                                </div>
                    </form>
                    <div class="text-center"><img class="img-fluid" src={{ asset('storage/internal-system.png') }} /></div>
            </div>
        </div>
    </div>
  </body>
</html>