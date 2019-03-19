<!DOCTYPE html>
<html>
<head>
	<title>CAS | Career Advancement Scheme</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	
	<!-- global.css import -->
	<link rel="stylesheet" type="text/css" href="Frontend/global.css">


	<!-- general.js import -->
	<script type="text/javascript" src="general.js"></script>

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

	<!-- animate css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!-- printThis files -->
	<script src="printThis.js"></script>
</head>

<body>
		<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark"  style="height: 50px">
	  	<a class="navbar-brand" href="index.php">CAS</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      	<!-- <li class="nav-item active">
		        	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      	</li> -->
		      	<?php
		      	if(!isset($_SESSION['id']))
		      	{
			      	?>
			      	<li class="nav-item">
			        	<a class="nav-link" href="index.php">Sign Up | Sign In</a>
			      	</li>
			      	<?php
			    }			      	
			    else
			    {
			    	?>			    	
			      	<li class="nav-item dropdown">
				        <img class="nav-link dropdown-toggle" src="<?php echo $profilePicLocation; ?>" width="50px" height="50px" style="overflow: hidden;border-radius: 50%;display:block;margin:0 auto;object-fit: cover;cursor: pointer" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          	<!-- <img src="defaults/default_userprofile_pic.png" width="30px" style="display:block;margin:0 auto"> -->
				        <!-- </a> -->
				        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
				        	<h6 class="dropdown-header"><?php echo $_SESSION['faculty_name']; ?></h6>
				          	<a class="dropdown-item" href="userprofile.php"><img src="defaults/default_userprofile_pic.png" style="width:30px;height:auto;"><span class="my-auto ml-2">My Profile</span></a>
				          	<a class="dropdown-item" href="usersettings.php"><img src="settings.png" style="width:30px;height:auto"><span class="my-auto ml-2">Settings</span></a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="logout.php">Log out</a>
				        </div>
			      	</li>
			      	<?php
		      	}
		      	?>
		    </ul>
	  	</div>
	</nav>

	