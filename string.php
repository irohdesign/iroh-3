<?php 
	if( isset( $_POST["exp_submit"] )) {
		$experience = strtolower($_POST["exp_level"]); /* everything is lowercase */
		
		$a array(
			"beginner",
			"intermediate",
			"experienced"	
		);
		
		$b array(
			"light",
			"medium",
			"heavy"	
		);
	}
?>

<!doctype html>
<html lang="en">
  <head>
  	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>String Theory</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> <!-- font awesome -->

	<link href="style.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet"> 
	
	<link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
	
<link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	
  </head>

  <div id="string-app">
	  <h1>String Theory Application</h1>
	  
	  <p>Can't figure out which gauge string you should be using?</p>
	  
	  <div class="row">
		  <form class="col-sm-8 col-sm-offset-2" action="" method="post">
				<textarea placeholder="Enter your experience level" class="form-control input-lg" name="exp_level"></textarea><br>
				<button type="submit" class="btn btn-primary btn-lg pull-right" name="exp_submit">Submit</button>
		  </form>
	  </div>
	  
	  <?php ?>
  </div>
 
  