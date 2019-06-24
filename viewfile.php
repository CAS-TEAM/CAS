<?php

session_start();

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqlx="SELECT profilePicLocation FROM faculty_table WHERE id='$userId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);
$profilePicLocation=$rowx['profilePicLocation'];

include 'top.php';
include 'left-nav.php';

?>

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
							else if($ext=="doc")
							{
								// $docObj = new DocxConversion($filepath);
								//$docObj = new DocxConversion("test.docx");
								//$docObj = new DocxConversion("test.xlsx");
								//$docObj = new DocxConversion("test.pptx");
								// echo $docText= $docObj->convertToText();

								?>
								<iframe src="https://docs.google.com/gview?url=http://lms-kjsce.somaiya.edu/cas/<?php echo $filepath; ?>&embedded=true"></iframe>
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