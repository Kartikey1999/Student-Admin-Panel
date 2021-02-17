
<?php
session_start();

include "databaseConnect.php";
 $queryId		=		trim($_REQUEST["queryId"]);
 $firstName		=		trim($_REQUEST["firstName"]);
 $enrollDate	=		trim($_REQUEST["enrollDate"]);
 $course		=		trim($_REQUEST["course"]);
 
$_SESSION["queryId"]		=		$queryId;
$_SESSION["firstName"]		=		$firstName;
$_SESSION["enrollDate"]		=		$enrollDate;
$_SESSION["course"]			=		$course;



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
	
	
	
	$sql = $conn->prepare("insert into tbl1queries(firstName,enrollDate,course) VALUES (:firstName,:enrollDate,:course)");
		//$sql->bindParam(':queryId',$queryId);
		$sql->bindParam(':firstName',$firstName);
		$sql->bindParam(':enrollDate', $enrollDate);
		$sql->bindParam(':course', $course);
		$sql->execute();
		$conn = null;
	
		
		header("location:queries.php?msg=3");
	?>