      <div class="row">
        <div class="col-md-9 myarticlebody">
          <div class="myarticletext">
            <h2>Our Offers!</h2>
          </div>
          <div class="myarticletext">
          <?php
          foreach($offers_data as $key => $value) {

            if (($key) % 3 == 0) {
              if($key != 0) echo '</div>';
              echo '<div class="row">';
            }
            echo '<div class="col-xs-12 col-sm-4" align="center">';
            echo '<a href="/offer/'.$value['id'].'" >';
            if($value['image'] != '') echo '<img src="/assets/img/uploads/thumbnails/'.$value['image'].'" class="img-responsive" style="max-width: 180px;" />';
            echo '<p align="center">'.$value['title'].'</p>';
            echo '</a>';
            echo '</div>';

          }
          if(count($offers_data) == 0) echo '<p>No offers added yet.</p>';
          else echo '</div>';
          ?>
          </div>
        </div>