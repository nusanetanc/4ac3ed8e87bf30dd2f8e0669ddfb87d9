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
<form class="form-horizontal">
  <fieldset>
    <legend>Legend</legend>
    <div class="row">
    <?php
  include('konfigs.php');
      $rslt = $db_job->find();
      foreach ($rslt as $row) { ?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption">
            <h3><?php echo $row['name']; ?></h3>
            <p><?php echo $row['position']; ?></p>
            <p><small>Date posting : </small></p>
            <p><a href="#" class="btn btn-primary" role="button">Save Jobs</a> <a href="#" class="btn btn-default" role="button">Apply</a></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </fieldset>
</form>
</div>
</body>
