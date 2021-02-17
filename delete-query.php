<?php
include "databaseConnect.php";
$queryId		=trim($_REQUEST["queryId"]);

$sql = $conn->prepare("delete from tbl1queries where queryId=:queryId");
	$sql->bindParam(':queryId', $queryId);
	$sql->execute();
	$conn = null;
	header("location:queries.php?msg=2");
?>
