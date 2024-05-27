<?php
include "../dbconnection.php";

$id = $_GET['id'];
$sql= "DELETE FROM `section6` WHERE student_id=$id";
$result =mysqli_query($connection,$sql);
if($result){
	header("Location: ../grade7/section6.php?msg=One Student record deleted successfully.");
}

?>