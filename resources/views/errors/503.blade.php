<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Free coming soon template with jQuery countdown">

  <title>Webuild - Free Bootstrap coming soon template with countdown</title>

  <!-- Bootstrap -->
  <link href="{{ asset('css/maintenance/assets/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/maintenance/assets/css/bootstrap-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('css/maintenance/assets/css/font-awesome.css') }}" rel="stylesheet">

  <!-- siimple style -->
  <link href="{{ asset('css/maintenance/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: WeBuild
    Theme URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><img class="img-fluid" src={{ asset('storage/revid-icon.png') }} /></h1>
          <h2 class="subtitle">we'll ready to launch after</h2>
          <div id="countdown"></div>
          <div class="social">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="row contctform">
        <div class="col-md-8 col-md-offset-2">
          <h3></h3>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
        </div>
        
      </div>
    </div>
  </div>
  <!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="{{ asset('css/maintenance/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('css/maintenance/assets/js/jquery.countdown.min.js') }}"></script>
  <script type="text/javascript">
    $('#countdown').countdown('2018/08/10', function(event) {
      $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
    });
  </script>-->
</body>

</html>
