<?php
include "databaseConnect.php";
$permissionId		=trim($_REQUEST["permissionId"]);

$sql = $conn->prepare("delete from tbl1permissions where permissionId=:permissionId");
	$sql->bindParam(':permissionId', $permissionId);
	$sql->execute();
	$conn = null;
	header("location:permissions.php?msg=2");
?>
