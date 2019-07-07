<?php

session_start();

include 'dbh.php';

date_default_timezone_set('Asia/Kolkata');

if(isset($_SESSION['id']))
{

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqlp="SELECT profilePicLocation,admin,hod,committee FROM faculty_table WHERE id='$userId'";
$resultp=mysqli_query($conn,$sqlp);

$rowp=mysqli_fetch_assoc($resultp);

$profilePicLocation=$rowp['profilePicLocation'];
$admin=$rowp['admin'];
$hod=$rowp['hod'];
$committee=$rowp['committee'];
if($admin==1 || $hod==1  || $committee==1)
{

include 'top.php';
include 'left-nav.php';
?>

	<div class="container" style="margin-top: 8px">
	<div class="row">    		
	<div class="col offset-md-2 parta" id="part-a-container">
		<header>
			<h2 class="heading" style="font-size:20px"><b>EDIT ACCESS PANEL</b></h2>
		</header>
		<p>List of faculties that have applied for Edit Access</p>
		<table class="table table-bordered" style="background-color: white">
			<thead style="color: white">
				<tr>
					<th scope="col" style="background-color: #343a40;text-align: center">#</th>
					<th scope="col" style="background-color: #343a40;text-align: center">Faculty Name</th>
					<th scope="col" style="background-color: #343a40;text-align: center">Form</th>
					<th scope="col" style="background-color: #343a40;text-align: center">Grant Access</th>
				</tr>
			</thead>
			<tbody>
				<?php

				$sql="SELECT facultyId, form, year FROM request_edit_access ORDER BY id DESC";
				$result=mysqli_query($conn, $sql);
				if(mysqli_num_rows($result)==0)
				{
					?>
					<p>No faculties have applied for edit access</p>
					<?php
				}
				else
				{
					$counter=0;
					while($row=mysqli_fetch_assoc($result))
					{
						$facultyId=$row['facultyId'];
						$form=$row['form'];
						$year=$row['year'];

						$counter+=1;

						$sqln="SELECT faculty_name FROM faculty_table WHERE id='$facultyId'";
						$resultn=mysqli_query($conn,$sqln);
						$rown=mysqli_fetch_assoc($resultn);
						$faculty_name=$rown['faculty_name'];
						?>
						<tr id="ga<?php echo $counter; ?>">
							<td><?php echo $counter; ?></td>
							<td><?php echo $faculty_name; ?></td>
							<td>Form <?php echo $form; ?> ~ <?php echo ($year-1).'-'.$year; ?></td>
							<td>
								<form class="grant-access-form" action="" method="POST">	
									<input type="hidden" name="counter" value="<?php echo $counter; ?>">						      		
		  							<input type="hidden" name="facultyId" value="<?php echo $facultyId; ?>">
		  							<input type="hidden" name="year" value="<?php echo $year; ?>">
		  							<input type="hidden" name="form" value="<?php echo $form; ?>">
		  							<button type="submit" name="submit" class="btn btn-primary" id="ga<?php echo $id; ?>">Grant Access</button>			  							
						      	</form>
							</td>
						</tr>
						<?php
					}
				}

				?>
			</tbody>
		</table>
	</div>
	</div>
	</div>

<?php
}
else
{
	header("LOCATION: userprofile.php");
}

}
else
{
	header("LOCATION: index.php");
}