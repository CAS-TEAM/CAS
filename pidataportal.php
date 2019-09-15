<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqlx="SELECT profilePicLocation FROM faculty_table WHERE id='$userId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);
$profilePicLocation=$rowx['profilePicLocation'];

$sqlp="SELECT hod, committee, department FROM faculty_table WHERE id='$userId'";
$resultp=mysqli_query($conn,$sqlp);
$rowp=mysqli_fetch_assoc($resultp);
$hod=$rowp['hod'];
$department=$rowp['department'];

if($hod==1)
{

include 'top.php';
include 'left-nav.php';

?>	
	<div class="container">
		<div class="row">       
		<div class="col offset-md-2 parta">		

			<!-- place all code here -->

			<div class="custombox">
				<br>
				<h2>P.I. Data Input Portal</h2>
				<form method="POST" class="piportalform">

					<p class="text-center h6">Choose a faculty in your department and fill their PI values</p>

					<br>
				    <label class="text-left" for="facultyselect">Choose Faculty</label>
				    <select style="width:100%;padding:10px" id="facultyselect" name="facultyselect">
				    	<?php

				    	$sql="SELECT id, faculty_name FROM faculty_table WHERE department='$department' AND id!='$userId'";
				    	$result=mysqli_query($conn, $sql);
				    	while($row=mysqli_fetch_assoc($result))
				    	{
				    		$id=$row['id'];
				    		$faculty_name=$row['faculty_name'];
				    		?>
				    		<option value="<?php echo $id; ?>"><?php echo $faculty_name; ?></option>
				    		<?php
				    	}

				    	?>
				      	
				    </select>
				    <br>
					<!--Section 1-->
					<br>
					<p style="font-size:20px"><b>2017-2018</b></p>
					<hr style="border: 0.5px solid #f7497d; "><br>
					<div>
						<input type="number" name="parta18" id="parta18" min="0" max="50" required>
						<label>Part A Total PI (maximum marks: 50)</label>
					</div>
					<p><b>Part B</b></p>
					<hr style="border: 0.5px solid #f7497d;"><br>
					<div>
						<input type="number" name="partbi18" id="partbi18" min="0" max="100" required>
						<label>Category I Total PI (maximum marks: 100)</label>
					</div>

					<div>
						<input type="number" name="partbii18" id="partbii18" min="0" max="100" required>
						<label>Category II Total PI (maximum marks: 100)</label>
					</div>

					<div>
						<input type="number" name="partbiii18" id="partbiii18" min="0" max="175" required>
						<label>Category III Total PI (maximum marks: 175)</label>
					</div>

					<div>
						<input type="number" name="partbiv18" id="partbiv18" min="0" max="75" required>
						<label>Category IV Total PI (maximum marks: 75)</label>
					</div>

					<hr style="border: 0.5px solid #ccc; "><br>
						<!--Section 2-->

						<p style="font-size:20px"><b>2016-2017</b></p>
					<hr style="border: 0.5px solid #f7497d; "><br>
					<div>
						<input type="number" name="parta17" id="parta17" min="0" max="50" required>
						<label>Part A Total PI (maximum marks: 50)</label>
					</div>
					<p><b>Part B</b></p>
					<hr style="border: 0.5px solid #f7497d;"><br>
					<div>
						<input type="number" name="partbi17" id="partbi17" min="0" max="100" required>
						<label>Category I Total PI (maximum marks: 100)</label>
					</div>

					<div>
						<input type="number" name="partbii17" id="partbii17" min="0" max="100" required>
						<label>Category II Total PI (maximum marks: 100)</label>
					</div>

					<div>
						<input type="number" name="partbiii17" id="partbiii17" min="0" max="175" required>
						<label>Category III Total PI (maximum marks: 175)</label>
					</div>

					<div>
						<input type="number" name="partbiv17" id="partbiv17" min="0" max="75" required>
						<label>Category IV Total PI (maximum marks: 75)</label>
					</div>


					<input type="submit" value="SAVE">
					<p class="text-center my-2" id="message"></p>

				</form>

			</div>

		</div>
		</div>
	</div>

<?php
}
else
{
	header('LOCATION: index.php');
}