<?php
include "../dbconnection3.php";

$id = $_GET['id'];
$sql= "DELETE FROM `section1` WHERE student_id=$id";
$result =mysqli_query($connection,$sql);
if($result){
	header("Location: ../grade7/section1.php?msg=One Student record deleted successfully.");
}

?>