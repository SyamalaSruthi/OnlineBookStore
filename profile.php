<?php
  session_start();
  $count = 0;
  // connecto database

  $title = "Profile";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
<form method="post" action="profileverify.php" class="form-horizontal">
  <?php if(isset($_SESSION['err']) && $_SESSION['err'] == 1){ ?>
    <p class="text-danger">All fields have to be filled</p>
    <?php } ?>
  <div class="form-group">
    <label for="name" class="control-label col-md-4">Name</label>
    <div class="col-md-4">
      <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label for="address" class="control-label col-md-4">Email</label>
    <div class="col-md-4">
      <input type="text" name="email" class="form-control">
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
  <div class="form-group">
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
  </div>
</form>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>
