<?php

$conn=mysqli_connect('localhost','root','','cas_db');

if(!$conn){
	die("Couldnot connect to server");
}