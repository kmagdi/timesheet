<?php
ob_start();

if(!isset($_SESSION["user"])=="admin")
    header("Location:index.php");

	require_once 'config.php';

if(isset($_GET['editId']))
	include "alkalmazottak\\edit.php";
else if(isset($_GET['deleteId']))
	include "alkalmazottak\\delete.php";
else{
	include "alkalmazottak\\alkalmazottakView.php";
}	
?>



