      <div id="carousel-home" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php
          // $offers_count = count($offers_data);
          // for($i=0; $i<$offers_count; $i++) {
          //   if($i == 0) $class_active_text = ' class="active"';
          //   else $class_active_text = '';
          //   echo '<li data-target="#carousel-home" data-slide-to="'.$i.'"'.$class_active_text.'></li>';
          // }
          foreach ($offers_data as $key => $value) {
            if($value['image'] == '') continue;
            if($key == 0) $class_active_text = ' class="active"';
            else $class_active_text = '';
            echo '<li data-target="#carousel-home" data-slide-to="'.$key.'"'.$class_active_text.'></li>';
          }


          ?>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php

          foreach ($offers_data as $key => $value) {
            if($value['image'] == '') continue;
            if($key == 0) $class_active_text = ' active';
            else $class_active_text = '';
            echo '<div class="item'.$class_active_text.'">';
            echo '<a href="/offer/'.$value['id'].'"><img src="/assets/img/uploads/original/'.$value['image'].'" alt="'.$value['title'].'"></a>';
            echo '<div class="carousel-caption">';
            echo '<h3>'.$value['title'].'</h3>';
            echo '</div></div>';
          }

          ?>
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
                <li><a href="about">About Detailer's</a></li> 
                <li><a href="services">Services</a></li> 
                <li><a href="products">Products</a></li> 
                <li><a href="offers">Offers</a></li> 
                <li><a href="location">Location Map</a></li>
                <li><a href="contact">Contact</a></li>
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
        