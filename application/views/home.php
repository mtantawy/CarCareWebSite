      <div id="carousel-home" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-home" data-slide-to="0"></li>
          <li data-target="#carousel-home" data-slide-to="1"></li>
          <li data-target="#carousel-home" data-slide-to="2"></li>
          <li data-target="#carousel-home" data-slide-to="3"></li>
          <li data-target="#carousel-home" data-slide-to="4"></li>
          <li data-target="#carousel-home" data-slide-to="5" class="active"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item">
            <a href="#"><img src="<?php echo base_url(); ?>assets/img/carousel-home/01.jpg" alt="image 01 alt text"></a>
            <div class="carousel-caption">
              <h3>header</h3>
              <p>text image 01</p>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo base_url(); ?>assets/img/carousel-home/02.jpg" alt="image 02 alt text">
            <div class="carousel-caption">
              image 02
            </div>
          </div>
          <div class="item">
            <img src="<?php echo base_url(); ?>assets/img/carousel-home/03.jpg" alt="image 03 alt text">
            <div class="carousel-caption">
              image 03
            </div>
          </div>
          <div class="item">
            <img src="<?php echo base_url(); ?>assets/img/carousel-home/04.jpg" alt="image 04 alt text">
            <div class="carousel-caption">
              image 04
            </div>
          </div>
          <div class="item">
            <img src="<?php echo base_url(); ?>assets/img/carousel-home/05.jpg" alt="image 05 alt text">
            <div class="carousel-caption">
              image 05
            </div>
          </div>
          <div class="item active">
            <img src="<?php echo base_url(); ?>assets/img/carousel-home/06.jpg" alt="image 06 alt text">
            <div class="carousel-caption">
              image 06
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>

      <div class="row">
        <div class="col-md-2 mybody" style="padding:10px">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="/">Home</a></li> 
                <li><a href="About">About Detailer's</a></li> 
                <li><a href="Services">Services</a></li> 
                <li><a href="Products">Products</a></li> 
                <li><a href="Offers">Offers</a></li> 
                <li><a href="Location">Location Map</a></li>
                <li><a href="Contact">Contact</a></li>
              </ul>  
        </div>
        <div id="mybody" class="col-md-7 jumbotron mybody" >
          <div class="row">
            <div class="col-md-6 well well-sm"><p>Detailer's Car Care + few description words</p></div>
            <div class="col-md-6 well well-sm"><p>Detailer's Express + few description words</p></div>
          </div>
          <div class="well">
            <h3>latest products</h3>
            <table class="table">
              <tr>
                <td><img src="<?php echo base_url(); ?>assets/img/thumbnails/product_sample.jpg" style="width:100px" class="img-responsive"></td>
                <td><img src="<?php echo base_url(); ?>assets/img/thumbnails/product_sample.jpg" style="width:100px" class="img-responsive"></td>
                <td><img src="<?php echo base_url(); ?>assets/img/thumbnails/product_sample.jpg" style="width:100px" class="img-responsive"></td>
                <td><img src="<?php echo base_url(); ?>assets/img/thumbnails/product_sample.jpg" style="width:100px" class="img-responsive"></td>
              </tr>
              <tr>
                <td>product description linked to product page</td>
                <td>product description linked to product page</td>
                <td>product description linked to product page</td>
                <td>product description linked to product page</td>
              </tr>
                          </table>

                          <table class="table">

              <tr>
                <td><img src="<?php echo base_url(); ?>assets/img/thumbnails/product_sample.jpg" style="width:180px" class="img-responsive"></td>
                <td><img src="<?php echo base_url(); ?>assets/img/thumbnails/product_sample.jpg" style="width:180px" class="img-responsive"></td>
                <td><img src="<?php echo base_url(); ?>assets/img/thumbnails/product_sample.jpg" style="width:180px" class="img-responsive"></td>
              </tr>
              <tr>
                <td>product description linked to product page</td>
                <td>product description linked to product page</td>
                <td>product description linked to product page</td>
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