<?php
if(isset($_POST['submit'])){
    $to = "irohdesign@outlook.com";
    $from = $_POST['email'];
    $name = $_POST['name'];

    $subject = "New Information Request";
    $subject2 = "Information Request Sent!";

    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message ";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $success = "Success! Your message was sent.";
    }
?>


<html lang="en">
  <head>
  	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> <!-- font awesome -->

	<link href="style.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

  </head>


 <body style="background: rgba(18, 83, 125, .10);">
  <nav class="navbar" id="top">
	  <div class="container-fluid">
		  <div class="navbar-header hidden-sm hidden-md hidden-lg">

			  <a class="navbar-brand" href="index.html">Iroh</a>

			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav">
			  	<span class="sr-only">Toggle Navigation</span>
			  	<span class="glyphicon glyphicon-plus"></span>
			  </button>

		  </div><!-- end navbar-header -->

		  <div id="top-nav" class="navbar-collapse collapse">
			  <ul>
				  <li><a class="underlineAnim" href="index.html">Home</a></li>
				  <li><a class="underlineAnim" href="work.html">Work</a></li>
				  <li><a class="underlineAnim" href="about.html">About</a></li>
				  <li><a class="underlineAnim" href="contact.html">Contact</a></li>
			  </ul>
		  </div><!-- end of top-nav -->
	  </div><!-- end of container-fluid -->
  </nav><!-- end of navigation -->

  <header id="contactHead">
    <div id="contact-illustration">
        <div class="contactLine" id="a">
          <div class="contact-bub"></div>
        </div>
        <div class="contactLine" id="b">
          <div class="contact-bub"></div>
        </div>
        <div class="contactLine" id="c">
          <div class="contact-bub"></div>
        </div>
        <div class="contactLine" id="d">
          <div class="contact-bub"></div>
        </div>
        <div class="contactLine" id="e">
          <div class="contact-bub"></div>
        </div>
        <div class="contactLine" id="f">
          <div class="contact-bub"></div>
        </div>
        <div class="contactLine" id="g">
          <div class="contact-bub"></div>
        </div>
        <div class="contactLine" id="h">
          <div class="contact-bub"></div>
        </div>
        <div class="contactLine" id="i">
          <div class="contact-bub"></div>
        </div>
    </div>
  </header>

  <section id="contact-form">
    <p>I'm <strong>currently accepting</strong> new projects.</p>
    <p>Let's get to know each other.</p>

    <form method="post" name="contactForm" action="">
      <textarea placeholder="What do you want to build?" name="message"></textarea>

      <div class="row">
        <div class="col-sm-6">
          <label class="checks">Website Redesign
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>

          <label class="checks">Website Launch
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>

          <label class="checks">Content Strategy &amp; Ideas
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div>

        <div class="col-sm-6">
          <label class="checks">Branding &amp; Logo Design
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>

          <label class="checks">Anything else!
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>

        <input type="text" name="name" placeholder="Your Name">
        <input type="text" name="email" placeholder="Your Email">

        <input type="submit" name="submit" value="Send">

        <?php echo $success; ?>
    </form>

  </section>

  <footer>
    <h3><a href="index.html">Iroh Design</a> &copy; 2018</h3>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="main.js"></script>
</footer>
  </body>
