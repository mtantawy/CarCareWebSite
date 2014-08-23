      <div class="row">
        <div class="col-md-9 myarticlebody">
        <!-- <div class="col-md-9 jumbotron myarticlebody"> -->
          <div class="myarticletext">
            <h1><?php echo $article_data['title']; ?></h1>
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
          <hr>
          <div class="myarticletext">
            <?php if(trim($article_data['body']) != '') echo '<h3>How To Use</h3>'; ?>
            <p><?php echo nl2br($article_data['body']); ?></p>
            <p>
              <?php 
              $facebook_link = $article_data['facebook_link'];
              $souq_link = $article_data['souq_link'];

              if($facebook_link != '') echo 'Join the discussion at Facebook: <a href="'.$facebook_link.'">'.$facebook_link.'</a>';
              echo '<br>';
              if($souq_link != '') echo 'Buy online at Souq.com: <a href="'.$souq_link.'">'.$souq_link.'</a>';
              ?>
            </p>
          </div>
        </div>