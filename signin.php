<?php
  include('konfigs.php');
	if(isset($_POST['submit'])){
    $res = $db_user->find(array("email"=>$_POST['inputEmail'], "password"=>md5($_POST['inputPassword'])));
    	foreach ($res as $row) {
          echo $row['name'];
      }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Groovy</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>"  method="post">
  <fieldset>
    <legend>Legend</legend>
  <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
      </div>
  </div>
  <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
      </div>
  </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
      </div>
    </div>
  </fieldset>
</form>
</div>
</body>
