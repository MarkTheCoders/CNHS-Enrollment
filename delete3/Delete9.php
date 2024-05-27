<?php
include "../dbconnection2.php";

$id = $_GET['id'];
$sql= "DELETE FROM `section9` WHERE student_id=$id";
$result =mysqli_query($connection,$sql);
if($result){
	header("Location: ../grade7/section9.php?msg=One Student record deleted successfully.");
}

?>