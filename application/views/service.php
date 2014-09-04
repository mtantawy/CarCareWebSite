      <div class="row">
        <div class="col-md-9 myarticlebody">
          <div class="myarticletext">
            <h2><?php echo $article_data['title']; ?></h2>
          </div>
          <div class="row myarticletext">
            <div class="col-md-6">
              <?php if(trim($article_data['body_start']) != '') echo '<h3>Description</h3>'; ?>
              <p><?php echo nl2br($article_data['body_start']); ?></p>
            </div>
            <div class="col-md-6"><center>
              <img src="/assets/img/uploads/articles/<?php echo $article_data['image']; ?>" class="img-responsive">
              </center>
            </div>
          </div>
          <hr class="myhr">
          <div class="myarticletext">
            <?php if(trim($article_data['body']) != '') echo '<h3>How To Use</h3>'; ?>
            <p><?php echo nl2br($article_data['body']); ?></p>
            <p>
              <?php 
              $facebook_link = $article_data['facebook_link'];

              if($facebook_link != '') echo '<p><strong>Join the discussion at</strong> <a href="'.$facebook_link.'"><img src="/assets/img/FB-f-Logo__blue_29.png" alt="facebook" /></a></p>';
              ?>
            </p>
          </div>
        </div>