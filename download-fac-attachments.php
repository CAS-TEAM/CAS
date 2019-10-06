<?php

session_start();

if(isset($_SESSION['id']))
{

include 'dbh.php';

$department=mysqli_real_escape_string($conn,$_GET['department']);
$year=mysqli_real_escape_string($conn,$_GET['year']);

// creating zip files for every faculty's files
$sql="SELECT id, email, faculty_name FROM faculty_table WHERE department='$department'";
$result=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result))
{
	$email=$row['email'];
	// echo $email;
	$faculty_name=$row['faculty_name'];

	$pathdir = "users/".$email."/";  
	  
	// Enter the name to creating zipped directory 
	$zipcreated = "zippedfiles/".$year."/".$faculty_name.".zip"; 
	  
	// Create new zip class 
	$zip = new ZipArchive; 
	   
	if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) 
	{ 	      
	    // Store the path into the variable 
	    $dir = opendir($pathdir); 
	       
	    while($file = readdir($dir)) { 
	        if(is_file($pathdir.$file)) { 
	            $zip -> addFile($pathdir.$file, $file); 
	        } 
	    } 
	    $zip ->close(); 
	}
}

//creating a zip of all the zip files above
$pathdir = "zippedfiles/".$year."/";  	  
// Enter the name to creating zipped directory 
$zipcreated = $year.$department."_zippedfiles.zip"; 	  
// Create new zip class 
$zip = new ZipArchive;   
if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) 
{ 	      
    // Store the path into the variable 
    $dir = opendir($pathdir);       
    while($file = readdir($dir)) {
    	// echo basename($file);
        if(is_file($pathdir.$file)) { 
            $zip -> addFile($pathdir.$file, $file); 
        } 
    } 
    $zip ->close(); 
}

// deleting all the temporary zip files created in the zipped files folder
array_map('unlink', array_filter((array) glob("zippedfiles/".$year."/*")));

header('LOCATION: download-attachments.php?year='.$year.'&department='.$department);

}
else
{
	header("LOCATION: index.php");
}

