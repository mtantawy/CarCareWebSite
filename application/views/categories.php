      <div class="row">
        <div class="col-md-9 myarticlebody">
          <div class="myarticletext">
            <h2>Service Categories</h2>
          </div>
          <div class="myarticletext">
          <?php
          foreach($categories_data as $key => $value) {

            if (($key) % 3 == 0) {
              if($key != 0) echo '</div>';
              echo '<div class="row">';
            }
            echo '<div class="col-xs-12 col-sm-4" align="center">';
            echo '<a href="/services/category/'.$value['id'].'" >';
            echo '<img src="/assets/img/uploads/thumbnails/'.$value['image'].'" class="img-responsive" />';
            echo '<p align="center">'.$value['name'].'</p>';
            echo '</a>';
            echo '</div>';


          }
          echo '</div>';
          ?>
          </div>
        </div>