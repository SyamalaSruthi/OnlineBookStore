<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>
	<form class="form-horizontal" method="post" action="register_verify.php">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Email</label>
			<div class="col-md-4">
				<input type="text" name="email" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Password</label>
			<div class="col-md-4">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Confirm Password</label>
			<div class="col-md-4">
				<input type="password" name="confirm_pass" class="form-control">
			</div>
		</div>
		<div class="form-group">
	    <label for="address" class="control-label col-md-4">Address</label>
	    <div class="col-md-4">
	      <input type="text" name="address" class="form-control">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="city" class="control-label col-md-4">City</label>
	    <div class="col-md-4">
	      <input type="text" name="city" class="form-control">
	    </div>
	  </div>
		<div class="form-group">
			<label for="state" class="control-label col-md-4">State</label>
			<div class="col-md-4">
				<input type="text" name="state" class="form-control">
			</div>
		</div>
	  <div class="form-group">
	    <label for="country" class="control-label col-md-4">Country</label>
	    <div class="col-md-4">
	      <input type="text" name="country" class="form-control">
	    </div>
	  </div>
		<div class="form-group">
			<label for="zip_code" class="control-label col-md-4">Zip Code</label>
			<div class="col-md-4">
				<input type="text" name="zipcode" class="form-control">
			</div>
		</div>
		<input type="submit" name="submit" class="btn btn-primary" align="center">
		<input type="reset" name="reset" class="btn btn-primary" align="center">
		<p>Already have an account? <a href="login.php">Login here</a>.</p>
	</form>

<?php
	require_once "./template/footer.php";
?>
