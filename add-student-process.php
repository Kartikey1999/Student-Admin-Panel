
<?php
session_start();

include "databaseConnect.php";
 $firstName		=		trim($_REQUEST["firstName"]);
 $date			=		trim($_REQUEST["date"]);
 $phoneNumber	=		trim($_REQUEST["phoneNumber"]);
 
 $gender		=		trim($_REQUEST["gender"]);
 $email			=		trim($_REQUEST["email"]);
 $password		=		trim($_REQUEST["password"]);
 $fatherName	=		trim($_REQUEST["fatherName"]);
 $motherName	=		trim($_REQUEST["motherName"]);
 $fatherNumber	=		trim($_REQUEST["fatherNumber"]);
 $motherNumber	=		trim($_REQUEST["motherNumber"]);
 $email1		=		trim($_REQUEST["email1"]);
 $address		=		trim($_REQUEST["address"]);
 $classId		=		trim($_REQUEST["classId"]);

$_SESSION["firstName"]		=		$firstName;
$_SESSION["date"]			=		$date;
$_SESSION["phoneNumber"]	=		$phoneNumber;

$_SESSION["gender"]			=		$gender;
$_SESSION["email"]			=		$email;
$_SESSION["fatherName"]		=		$fatherName;
$_SESSION["motherName"]		=		$motherName;
$_SESSION["fatherNumber"]	=		$fatherNumber;
$_SESSION["motherNumber"]	=		$motherNumber;
$_SESSION["email1"]			=		$email1;
$_SESSION["address"]		=		$address;
$_SESSION["classId"]		=		$classId;

	if(strlen($firstName)<=1 || empty($firstName) || $firstName=="")
	{
		header("location:add-student.php?err=1");
		exit;
	}
	if($date=="")
	{
		header("location:add-student.php?err=2");
		exit;
	}
	if(!is_numeric($phoneNumber))
	{
		header("location:add-student.php?err=3");
		exit;
	}
	if(strlen($phoneNumber)!=10)
	{
		header("location:add-student.php?err=3");
		exit;
	}
	if($classId== -1)
	{
		header("location:add-student.php?err=4");
		exit;
	}
	if($gender== -1)
	{
		header("location:add-student.php?err=5");
		exit;
	}
	if($email== "")
	{
		header("location:add-student.php?err=6");
		exit;
	}
	if($password== "")
	{
		header("location:add-student.php?err=7");
		exit;
	}
	if(strlen($fatherName)<=1 || empty($fatherName) || $fatherName=="")
	{
		header("location:add-student.php?err=8");
		exit;
	}
	if(strlen($motherName)<=1 || empty($motherName) || $motherName=="")
	{
		header("location:add-student.php?err=9");
		exit;
	}
	if(!is_numeric($fatherNumber))
	{
		header("location:add-student.php?err=3");
		exit;
	}
	if(strlen($fatherNumber)!=10)
	{
		header("location:add-student.php?err=10");
		exit;
	}
	if(!is_numeric($motherNumber))
	{
		header("location:add-student.php?err=3");
		exit;
	}
	if(strlen($motherNumber)!=10)
	{
		header("location:add-student.php?err=11");
		exit;
	}
	if($email1== "")
	{
		header("location:add-student.php?err=12");
		exit;
	}
	if($address== "")
	{
		header("location:add-student.php?err=13");
		exit;
	}
	
		$date= date('y-m-d');
	$sql = $conn->prepare("insert into tbl1student(firstName,studentDOB,studentPhone,studentGender,studentEmail,studentPassword,father,mother,fNumber,mNumber,parentsEmail,houseAddress,classId) VALUES (:firstName,:studentDOB,:studentPhone,:studentGender,:studentEmail,:studentPassword,:father,:mother,:fNumber,:mNumber,:parentsEmail,:houseAddress,:classId)");
	
		$sql->bindParam(':firstName',$firstName);
		$sql->bindParam(':studentDOB', $date);
		$sql->bindParam(':studentPhone', $phoneNumber);
		
		$sql->bindParam(':studentGender', $gender);
		$sql->bindParam(':studentEmail', $email);
		$sql->bindParam(':studentPassword', $password);
		$sql->bindParam(':father', $fatherName);
		$sql->bindParam(':mother', $motherName);
		$sql->bindParam(':fNumber', $fatherNumber);
		$sql->bindParam(':mNumber', $motherNumber);
		$sql->bindParam(':parentsEmail', $email1);
		$sql->bindParam(':houseAddress', $address);
		$sql->bindParam(':classId', $classId);
		$sql->execute();
		$conn = null;
	
		unset($_SESSION["firstName"]);
		$_SESSION["date"]="";
		$_SESSION["phoneNumber"]="";
		
		$_SESSION["gender"]="";
		$_SESSION["email"]="";
		$_SESSION["fatherName"]="";
		$_SESSION["motherName"]="";
		$_SESSION["fatherNumber"]="";
		$_SESSION["motherNumber"]="";
		$_SESSION["email1"]="";
		$_SESSION["address"]="";
		$_SESSION["classId"]="";
		header("location:students.php?msg=1");
	?>