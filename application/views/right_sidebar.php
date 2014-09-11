        <div id="right-sidebar" class="col-md-2 jumbotron mybody">
          <p>Sign up to get the latest news and information via email</p>
          <div id="subscription">
            <?php 
            $this->load->helper('form');
            echo validation_errors(); 
            $attributes = array('role' => 'form', 'id' => 'subscription_form');
            echo form_open('/subscription', $attributes);
            ?>
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
              </div>
              <button type="submit" class="btn btn-default">Sign Up!</button>
            </form>
            <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
            <script type="text/javascript">
            $('#subscription_form').on('submit', function(event){
              //Stop form from submitting normally
                event.preventDefault();
                var form = $(this);
                var formdata = false;
                if (window.FormData){
                    formdata = new FormData(form[0]);
                }
                $.ajax({
                    url         : '/subscription',
                    data        : formdata ? formdata : form.serialize(),
                    cache       : false,
                    contentType : false,
                    processData : false,
                    type        : 'POST',
                    success     : function(data, textStatus, jqXHR){
                        $("#subscription").html(data);

                    }
                });
            });
            </script>
          </div>

          <hr>
          <div class="fb-like-box" data-href="https://www.facebook.com/DetailersCarCare" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="true"></div>
          <hr>
          <div class="fb-like-box" data-href="https://www.facebook.com/Detailersexpress" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="true"></div>
        </div>
      </div>