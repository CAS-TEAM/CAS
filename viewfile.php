<?php

session_start();

include 'dbh.php';
include 'top.php';
include 'left-nav.php';

?>

	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark"  style="height: 50px">
		<a class="navbar-brand" href="#">CAS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<!-- <li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li> -->
				<li class="nav-item dropdown">
					<img class="nav-link dropdown-toggle" src="defaults/default_userprofile_pic.png" width="50px" style="cursor: pointer" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<!-- <img src="defaults/default_userprofile_pic.png" width="30px" style="display:block;margin:0 auto"> -->
					<!-- </a> -->
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<h6 class="dropdown-header"><?php echo $_SESSION['faculty_name']; ?></h6>
						<a class="dropdown-item" href="userprofile.php"><img src="defaults/default_userprofile_pic.png" style="width:30px;height:auto"><span class="my-auto ml-2">My Profile</span></a>
						<a class="dropdown-item" href="usersettings.php"><img src="settings.png" style="width:30px;height:auto"><span class="my-auto ml-2">Settings</span></a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="logout.php">Log out</a>
					</div>
				  </li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">       
			<div class="col offset-md-2 parta">
				<div class="row">					
					<div class="col">
						<?php

						if(isset($_GET['location']) && ($_GET['location']!="none" || $_GET['location']!="NAN"))
						{
							// echo $_GET['location'];
							$filepath=$_GET['location'];
							$filename=basename($filepath);
							$ext = pathinfo($filename, PATHINFO_EXTENSION);
							// echo $ext;
							?>
							
							<h1><?php echo $filename; ?></h1>

							<?php
							// echo $ext;
							$ext=trim($ext);
							// echo $ext;
							if($ext=="png" || $ext=="jpeg" || $ext=="gif" || $ext=="jpg")
							{
								?>
								<img src="<?php echo $filepath; ?>" alt="file" style="width:100%;height:auto">
								<?php
							}
							else
							{
								?>
								<embed src="<?php echo $filepath; ?>" width="100%" height="500px" />
								<?php
							}
						}
						else
						{

							?>

							<p>File not found.</p>

							<?php

						}

						?>
						<br>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
	<br>
</body>
</html>