<?php
include "databaseConnect.php";
$adminId		=trim($_REQUEST["adminId"]);

$sql = $conn->prepare("delete from tbl1admin where adminId=:adminId");
	$sql->bindParam(':adminId', $adminId);
	$sql->execute();
	$conn = null;
	header("location:admins.php?msg=2");
?>
