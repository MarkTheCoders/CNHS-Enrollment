<?php
include "../dbconnection2.php";

$id = $_GET['id'];
$sql= "DELETE FROM `section8` WHERE student_id=$id";
$result =mysqli_query($connection,$sql);
if($result){
	header("Location: ../grade7/section8.php?msg=One Student record deleted successfully.");
}

?>