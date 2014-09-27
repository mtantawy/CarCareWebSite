      <div id="carousel-home" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php
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
                <li><a href="/about">About Detailer's</a></li> 
                <li><a href="/services">Services</a></li> 
                <li><a href="/products">Products</a></li> 
                <li><a href="/offers">Offers</a></li> 
                <li><a href="/franchise">Franchising</a></li>
                <li><a href="/contact">Contact</a></li>
              </ul>  
        </div>
        <div id="mybody" class="col-md-7 mybody" >
          <blockquote>
            <p>Detailer’s Car Care started in 2012 and has been providing automotive connoisseurs, enthusiasts and daily users trusted car care services and products that help them restore, maintain and beautify their automobiles.</p>
          </blockquote>
          <div>
            <h3>Latest Products</h3>
            <div class="row">
            <?php
            foreach($random_products as $key => $value) {  
              echo '<div class="col-xs-12 col-sm-3" align="center">';
              echo '<a href="/product/'.$value['id'].'" >';
              if($value['image'] != '') echo '<img src="/assets/img/uploads/thumbnails/'.$value['image'].'" class="img-responsive" style="height: 150px;" />';
              echo '<p align="center">'.$value['title'].'</p>';
              echo '</a>';
              echo '</div>';
            }
            ?>
            </div>

            <hr class="myhr">
            
            <h3>Latest Services</h3>
            <div class="row">
            <?php
            foreach($random_services as $key => $value) {  
              echo '<div class="col-xs-12 col-sm-3" align="center">';
              echo '<a href="/service/'.$value['id'].'" >';
              if($value['image'] != '') echo '<img src="/assets/img/uploads/thumbnails/'.$value['image'].'" class="img-responsive" style="height: 150px;" />';
              echo '<p align="center">'.$value['title'].'</p>';
              echo '</a>';
              echo '</div>';

            }
            ?>
            </div>

          </div>
        </div>