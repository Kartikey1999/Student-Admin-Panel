<?php
include "databaseConnect.php";
$studentId		=trim($_REQUEST["studentId"]);

$sql = $conn->prepare("delete from tbl1student where studentId=:studentId");
	$sql->bindParam(':studentId', $studentId);
	$sql->execute();
	$conn = null;
	header("location:students.php?msg=2");
?>
