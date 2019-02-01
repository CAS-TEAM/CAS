<?php

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqlp="SELECT profilePicLocation, faculty_name, hod, committee FROM faculty_table WHERE id='$userId'";
$resultp=mysqli_query($conn,$sqlp);

$rowp=mysqli_fetch_assoc($resultp);

$profilePicLocation=$rowp['profilePicLocation'];
$faculty_name=$rowp['faculty_name'];
$hod=$rowp['hod'];
$committee=$rowp['committee'];

?>

<div class="page-wrapper chiller-theme toggled">

	<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
		<i class="fas fa-bars"></i>
	</a>
	<nav id="sidebar" class="sidebar-wrapper sm-hidden">
		<div class="sidebar-content">
			<div class="sidebar-brand">
				<a href="#"></a>
				<div id="close-sidebar">
					<i class="fas fa-times"></i>
				</div>
			</div>
			<div class="sidebar-header">
				<div class="user-pic">
					<img class="img-responsive img-rounded" src="<?php echo $profilePicLocation; ?>"
						alt="User picture">
				</div>
				<div class="user-info">
					<span class="user-name" style="font-size: 16px">
						<?php echo $faculty_name; ?>
					</span>
					<?php 

					if($hod==1)
					{
						?>
						<span class="user-role" style="font-size: 15px">H.O.D.</span>
				 		<?php
				 	}
				 	if($committee==1)
					{
						?>
						<span class="user-role" style="font-size: 15px">Committee</span>
				 		<?php
				 	}
				 	?>

				</div>
			</div>
			<!-- sidebar-header  -->
			<!--  -->
			<!-- sidebar-search  -->
			<div class="sidebar-menu">
				<ul>
					
					<li class="sidebar-dropdown active">
						<a href="userprofile.php">
							<i class="fa fa-tachometer-alt" style="font-size: 15px"></i>
							<span style="font-size: 15px">My Profile</span>
						</a>
					</li>

					<li class="sidebar-dropdown">
						<a href="partA.php">
							<i class="fa fa-shopping-cart" style="font-size: 15px"></i>
							<span style="font-size: 15px">PartA form</span>
						</a>
					</li>
					<li class="sidebar-dropdown dropdown-arrow">
						<a>
							<i class="far fa-gem" style="font-size: 15px"></i>
							<span style="font-size: 15px">PartB form</span>
						</a>
						<div class="sidebar-submenu">
							<ul>
								<li>
									<a href="partB.php">Category I</a>
								</li>
								<li>
									<a href="#">Category II</a>
								</li>
								<li>
									<a href="#">Category III</a>
								</li>
								<li>
									<a href="#">Category IV</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="sidebar-dropdown">
						<a href="guidelines.php">
							<i class="fa fa-chart-line" style="font-size: 15px"></i>
							<span style="font-size: 15px">CAS Guidelines</span>
						</a>
						
					</li>
					<!-- <li class="sidebar-dropdown">
						<a href="#">
							<i class="fa fa-globe"></i>
							<span>Maps</span>
						</a>
						<div class="sidebar-submenu">
							<ul>
								<li>
									<a href="#">Google maps</a>
								</li>
								<li>
									<a href="#">Open street map</a>
								</li>
							</ul>
						</div>
					</li> -->
				 
				</ul>
			</div>
			<!-- sidebar-menu  -->
		</div>
		<!-- sidebar-content  -->
		<div class="sidebar-footer">
			<a>
				<p style="font-size: 15px">Copyright  <i class="far fa-copyright"></i>  2019  CAS</p>
			</a>
		</div>
	</nav>
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper sm-hidden">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#"></a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name" style="font-size: 18px">Manish
            <strong>Potey</strong>
          </span>
          <span class="user-role" style="font-size: 15 px">H.O.D</span>
         
        </div>
      </div>
      <!-- sidebar-header  -->
      <!--  -->
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          
          <li class="sidebar-dropdown active">
            <a href="userprofile.php">
              <i class="fas fa-user" style="font-size: 15px"></i>
              <span style="font-size: 15px">My Profile</span>
            </a>
          </li>

          <li class="sidebar-dropdown">
            <a href="partA.php">
              <i class="fab fa-wpforms" style="font-size: 15px"></i>
              <span style="font-size: 15px">PartA form</span>
            </a>
          </li>
          <li class="sidebar-dropdown dropdown-arrow">
            <a href="#">
              <i class="fab fa-wpforms" style="font-size: 15px"></i>
              <span style="font-size: 15px">PartB form</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="partB.php">Category I</a>
                </li>
                <li>
                  <a href="#">Category II</a>
                </li>
                <li>
                  <a href="#">Category III</a>
                </li>
                <li>
                  <a href="#">Category IV</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="guidelines.php">
              <i class="fas fa-info" style="font-size: 15px"></i>
              <span style="font-size: 15px">CAS Guidelines</span>
            </a>
            
          </li>
          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li> -->
         
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a>
        <p style="font-size: 15px">Copyright  <i class="far fa-copyright"></i>  2019  CAS</p>
      </a>
    </div>
  </nav>
>>>>>>> 28be22a3e5b3e084ae91795d135a5f3d051d65f6

	<!-- sidebar-wrapper  -->
	
<!-- page-wrapper -->
	<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
				crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
				crossorigin="anonymous"></script> -->