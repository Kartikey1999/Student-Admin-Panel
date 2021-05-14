
<?php
session_start();

include "databaseConnect.php";
 $queryId		=		trim($_REQUEST["queryId"]);
 $firstName		=		trim($_REQUEST["firstName"]);
 $enrollDate	=		trim($_REQUEST["enrollDate"]);
 $course		=		trim($_REQUEST["course"]);

 

 



	if($queryId== -1)
	{
		header("location:add-query.php?err=");
		exit;
	}
	if(strlen($firstName)<=1 || empty($firstName) || $firstName=="")
	{
		header("location:add-query.php?err=1");
		exit;
	}
	if($enrollDate=="")
	{
		header("location:add-query.php?err=2");
		exit;
	}
	
	
	
	$sql = $conn->prepare("update tbl1queries set firstName=:firstName,enrollDate=:enrollDate,course=:course where queryId=:queryId");
		$sql->bindParam(':queryId',$queryId);
		$sql->bindParam(':firstName',$firstName);
		$sql->bindParam(':enrollDate', $enrollDate);
		$sql->bindParam(':course', $course);
		$sql->execute();
		$conn = null;
	
		header("location:queries.php?msg=1");
	?>