


<div class="container-fluid" id="nav-bar">


	<div class="row">

		<div class="col-md-8">

			<ul>
				<li><a href="<?php echo base_url()?>home">Home</a></li>

			</ul>


		</div>



  		<div class="col-md-4">	

  		<?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'public_login_form'); 
  				echo form_open('auth/login_user', $attributes);
  		?>




				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Login</label>
				    <div class="col-sm-10">
				      <input type="text" name="user_login" class="form-control" id="input_login" placeholder="Login">
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" name="user_password" class="form-control" id="input_password" placeholder="Password">
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Remember me
				        </label>
				      </div>
				    </div>
				  </div>
				  
				  <div class="form-group">	
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Sign in</button>
				    </div>
				  </div>
			<?php echo form_close(); ?>


  		</div>






	</div>


</div>