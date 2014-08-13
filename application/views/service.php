<?php
require_once('functions.php');

if(isset($_GET['a']) && trim($_GET['a']) != '') $article_id = $_GET['a'];
$conn = connection_establisher();

$article_data = get_article($article_id, $conn);

connection_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detailer's Car Care | Detailer's Express</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        /*margin-top: 10px;
        margin-bottom: 10px;*/
        background: none;
      }
      html { 
      background: url('img/bg.jpg') no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      }
      .logos {
        padding-top: 10px;
        padding-bottom: 10px; 
        /*background-color: #eee;
        border: 1px solid #ddd;
        background-color: rgba(238,238,238,.15);
        border: 1px solid rgba(86,61,124,.2);*/
      }
      .mynav {
        background-color: #eee;
        border: 1px solid #ddd;
        background-color: rgba(238,238,238,.5);
        border: 1px solid rgba(86,61,124,.2); 
      }
      .navbar-default .mynavlinks>li>a {
        color: #111;
        font-weight: bolder;
      }
      .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus {
        background-color: #c1c1c1;
      }
      .carousel-inner > .item > a > img { 
        margin: 0 auto; 
        height:450px;
      }
      .carousel-inner > .item > img { 
        margin: 0 auto; 
        height:450px;
      }
      .myarticlebody {
        margin:10px;
        padding:0px;
        background-color: rgba(238,238,238,.8);
        border: 1px solid rgba(86,61,124,.2); 
      }
      .mybody {
        margin:10px;
        background-color: rgba(238,238,238,.8);
        border: 1px solid rgba(86,61,124,.2); 
      }
      #mybody {
        padding: 30px;
      }
      #right-sidebar {
        padding: 10px;
      }
      .mybody>ul>li>a {
        color: #111;
        font-weight: bolder;
      }
      .myfooter {
        background-color: rgba(238,238,238,.5);
        border: 1px solid rgba(86,61,124,.2); 
        text-align: center;
      }
      .myfooter>a {
        color: #444;
      }
 
    </style>
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
        <div class="col-md-3" align="right"><img src="img/logo1 - large.png" width="180px" class="img-responsive" /></div>
        <div class="col-md-6"></div>
        <div class="col-md-3" align="left"><img src="img/logo_express_header.png" width="265px" class="img-responsive" /></div>
      </div>

      <nav class="navbar navbar-default mynav" role="navigation">
        <div class="container-fluid">
          <ul class="nav navbar-nav mynavlinks">
            <li><a href="#">Home</a></li> 
            <li><a href="#">About Detailer's</a></li> 
            <li><a href="#">Services</a></li> 
            <li class="active"><a href="#">Products</a></li> 
            <li><a href="#">Offers</a></li> 
            <li><a href="#">Location Map</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </nav>

      <div class="row">
        <div class="col-md-9 jumbotron myarticlebody">
          <h1><?php echo $article_data['title']; ?></h1>
          <div class="well">
            <table width="100%" border="0">
              <tr>
                <td>
                  <table width="100%" border="0">
                    <tr>
                      <td width="370px"><center><img src="img/uploads/articles/<?php echo $article_data['image']; ?>" class="img-responsive" width="350px"></center></td>
                      <td style="vertical-align:middle; padding:10px;">
                        <p align="right"><?php echo nl2br($article_data['body_start']); ?></p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr><td><hr></td></tr>
              <tr>
                <td>
                  <p align="right"><?php echo nl2br($article_data['body']); ?></p>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div id="right-sidebar" class="col-md-2 jumbotron mybody">
          <p>join our newsletter to get the latest offers</p>
          <form role="form">
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
            </div>
            <button type="submit" class="btn btn-default">Send me Offers !</button>
          </form>
          <hr>
          <div class="fb-like-box" data-href="https://www.facebook.com/DetailersCarCare" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="true"></div>
          <hr>
          <div class="fb-like-box" data-href="https://www.facebook.com/Detailersexpress" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="true"></div>
        </div>
      </div>

      <div class="well well-sm myfooter">
        <a href="#">Home</a> | <a href="#">About Detailer's</a> | <a href="#">Services</a> | <a href="#">Products</a> | <a href="#">Offers</a> | <a href="#">Location Map</a> | <a href="#">Contact</a>
      </div>

      <!-- <div class="jumbotron"><h1>Marketing stuff!</h1><p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p><p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p></div> -->  

      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>