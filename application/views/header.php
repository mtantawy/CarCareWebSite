<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?> | Detailer's Car Care | Detailer's Express</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <!-- my Style Sheet -->
    <?php if(isset($isHome) && $isHome) { ?>
    <link href="<?php echo base_url(); ?>assets/css/homestyle.css" rel="stylesheet">
    <?php } else { ?>
    <link href="<?php echo base_url(); ?>assets/css/mystyle.css" rel="stylesheet">
    <?php } ?>
    
    <!-- google analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-54656099-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- google analytics -->
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="container">
      <div class="row logos">
        <div class="col-md-3" align="center"><img src="<?php echo base_url(); ?>assets/img/Detailers_car_care_logo_header.png" style="max-width:150px" class="img-responsive" /></div>
        <div class="col-md-6"></div>
        <div class="col-md-3" align="center"><!-- <img src="<?php echo base_url(); ?>assets/img/logo_express_header.png" style="max-width:265px" class="img-responsive" /> --></div>
      </div>