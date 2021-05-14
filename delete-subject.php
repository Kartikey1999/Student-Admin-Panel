<?php
include "databaseConnect.php";
$subjectId		=trim($_REQUEST["subjectId"]);

$sql = $conn->prepare("delete from tbl1subjects where subjectId=:subjectId");
	$sql->bindParam(':subjectId', $subjectId);
	$sql->execute();
	$conn = null;
	header("location:subjects.php?msg=2");
?>
