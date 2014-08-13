      <div class="row">
        <div class="col-md-9 jumbotron myarticlebody">
          <h1><?php echo $article_data['title']; ?></h1>
          <div class="well">
            <table width="100%" border="0">
              <tr>
                <td>
                  <table width="100%" border="0">
                    <tr>
                      <td style="vertical-align:middle; padding:10px;">
                        <p><?php echo nl2br($article_data['body_start']); ?></p>
                      </td>
                      <td width="370px"><center><img src="img/uploads/articles/<?php echo $article_data['image']; ?>" class="img-responsive" width="350px"></center></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr><td><hr></td></tr>
              <tr>
                <td>
                  <p><?php echo nl2br($article_data['body']); ?></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>
                    <?php 
                    $facebook_link = $article_data['facebook_link'];

                    if($facebook_link != '') echo 'Join the discussion at Facebook: <a href="'.$facebook_link.'">'.$facebook_link.'</a>';
                    ?>
                  </p>
                </td>
              </tr>
            </table>
          </div>
        </div>