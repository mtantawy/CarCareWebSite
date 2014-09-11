			<?php
            echo validation_errors();
            if(isset($error_msg)) echo '<p>'.$error_msg.'</p>';
            $attributes = array('role' => 'form', 'id' => 'subscription_form');
            echo form_open('/subscription', $attributes);
            ?>
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" value="<?php echo set_value('name'); ?>">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="<?php echo set_value('email'); ?>">
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