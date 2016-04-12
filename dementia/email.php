<?PHP

$emailadd = "sam.ager@hotmail.com";

$choice=$_POST[choice];
$firstname=$_POST[firstname];
$lastname=$_POST[lastname];
$email=$_POST[email];
$phone=$_POST[phone];
$message=$_POST[message];



$sendto="$emailadd";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/html; ";
$headers.= "charset=iso-8859-1\r\n";
$headers.= "From: $email";
$subject=$_POST[subject];



  $emailcontent = "
Choice: $choice
First Name: $firstname
Last Name: $lastname
Phone: $phone
Email: $email 
Message: 
$message 
"

?> 


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Dementia Health Integration Team (HIT)</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog-home.css" rel="stylesheet">
	
	<!-- My CSS -->
	<link href="css/edit.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="img/icons/webicon.png">

	<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="js/resize.js"></script>
	
</head>

<body>

	<div class="container2">
		<div class="abovenav">
		
		 <!-- Logo -->
		<img class="logo" alt="logo" src="img/logo2.png">
			

			<!-- Social Media Icons -->	
			<div class="socialbar">
				<a href="https://www.facebook.com/pages/Dementia-Web/101313349923024" target="blank"><img class="social" alt="facebook" src="img/icons/facebook.png"></a>
				<a href="https://twitter.com/dementiaweb" target="blank"><img class="social" alt="twitter" src="img/icons/twitter.png"></a>
			</div>
			
			
			<!-- Search Bar -->
           <div class="searchbar">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
							</button>
                        </span>
					</div>
			</div>
			
		<!-- Helpline -->	
		<img class="helpline" alt="helpline contact" src="img/helpline2.png"> 
		
			
		</div>
	</div>
			
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container2">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
			 <a href="index.html"><img class="logo2" alt="logo" src="img/logosmall.png"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   	<span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
			<div class="dissapear">
                <a class="navbar-brand" href="index.html">Dementia Web</a>
			</div>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="diagnose.html">Newly Diagnosed</a>
                    </li>
                    <li>
                        <a href="social.html">Social</a>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Healthcare<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Medication</a></li>
								<li><a href="#">What to Expect</a></li>
								<li><a href="#">Appointments</a></li>
								<li><a href="#">Physical</a></li>
							</ul>
					<li>
                        <a href="inthehome.html">In The Home</a>
                    </li>
					<li>
                        <a href="paperwork.html">Paperwork</a>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="email.html">Email</a></li>
								<li><a href="forum.html">Forum</a></li>
							</ul>							
					</li>
					<li>
                        <a href="search.html">Search</a>
                    </li>
				</ul>
            </div>
        </div>
    </nav>
	
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Search...">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</span>
	</div>

	
		
<?php
// Send out the email or output an error message 
if (mail($sendto, $subject, $emailcontent, $headers)) { 
?>
	<div class= "container">	
					
		<ul class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="email.html">Email</a></li>
		</ul>
		
		
		<div class="row">
			<div class="col-md-8">
				<div class="articlebar">
					<h6>Email Sent</h6>     
				</div>
					<p><b>Thank You <?php echo $firstname; ?></b>, your email has successfully been delivered to <b><?php echo $choice; ?></b>.</p>
					<p>Below is a copy of what you sent:</p>
					<hr>
						<p><b>First Name:</b> <?php echo $firstname; ?></p>
						<p><b>Last Name:</b> <?php echo $lastname; ?></p>
						<p><b>Phone:</b> <?php echo $phone; ?></p>
						<p><b>Email:</b> <?php echo $email; ?></p>
						<p><b>Message:</b>
						<br>
						<?php echo $message; ?></p>
						<hr>
					<p><b><?php echo $choice; ?></b> will be in touch as soon as possible.</p>
			</div>
		</div>
	</div>
	
	
		<footer>
			<div class="container2">
				<div class="accessibility2">
					<p>Change font size:</p>				
				</div>
					<a class="acca" href="#acca" id="incfont">A+</a>
					<a class="acca" href="#acca" id="decfont">A-</a>
				</div>
			</div>
		</footer>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
<?php
	} 
	
else { // email send has been unsuccessful
?>

  	<p>&nbsp;</p>
	<p><b>Sorry <?php echo $firstname; ?></b></p>
	<p>For some reason the form submission has not been successful.</p>
 	<p>You sent the following:</p>
				<p><b>First Name: <?php echo $firstname; ?> </b></p>
				<p><b>Last Name: <?php echo $lastname; ?> </b></p>
				<p><b>Email:  <?php echo $email; ?> </b></p>
				<p><b>Message: <?php echo $message; ?> </b> </p>	
	<p> Please try again.</p>
<?php 
	} 
?>
</html>