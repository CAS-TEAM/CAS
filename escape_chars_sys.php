<?php


function escape_chars_func($ele)
{
	include 'dbh.php';

	return(mysqli_real_escape_string($conn,$ele));
}