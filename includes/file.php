
<?php
session_start();
//$check="77868t";
//if(!is_numeric($check))
//{
	//echo "yes";
//}
//else
//{
	//echo "no";
//}
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=dbinstitute", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
	
	//$firstName="Kartikey123";
	//$lastName="dave12";
	
	




echo $firstName=trim($_REQUEST["firstName"]);
echo $date=trim($_REQUEST["date"]);
echo $phoneNumber=trim($_REQUEST["phoneNumber"]);
echo $classId=trim($_REQUEST["classId"]);
echo $gender=trim($_REQUEST["gender"]);
echo $email=trim($_REQUEST["email"]);
echo $password=trim($_REQUEST["password"]);
echo $fatherName=trim($_REQUEST["fatherName"]);
echo $motherName=trim($_REQUEST["motherName"]);
echo $fatherNumber=trim($_REQUEST["fatherNumber"]);
echo $motherNumber=trim($_REQUEST["motherNumber"]);
echo $email1=trim($_REQUEST["email1"]);
echo $address=trim($_REQUEST["address"]);

$_SESSION["firstName"]=$firstName;
$_SESSION["date"]=$date;
$_SESSION["phoneNumber"]=$phoneNumber;
$_SESSION["classId"]=$classId;
$_SESSION["gender"]=$gender;
$_SESSION["email"]=$email;
$_SESSION["fatherName"]=$fatherName;
$_SESSION["motherName"]=$motherName;
$_SESSION["fatherNumber"]=$fatherNumber;
$_SESSION["motherNumber"]=$motherNumber;
$_SESSION["email1"]=$email1;
$_SESSION["address"]=$address;


if(strlen($firstName)<=1 || empty($firstName) || $firstName=="")
{
	header("location:practice.php?err=1");
	exit;
}
if($date=="")
{
	header("location:practice.php?err=2");
	exit;
}
if($phoneNumber=="")
{
	header("location:practice.php?err=3");
	exit;
}
if($classId== -1)
{
	header("location:practice.php?err=4");
	exit;
}
if($gender== 0)
{
	header("location:practice.php?err=5");
	exit;
}
if($email== "")
{
	header("location:practice.php?err=6");
	exit;
}
if($password== "")
{
	header("location:practice.php?err=7");
	exit;
}
if($fatherName== "")
{
	header("location:practice.php?err=8");
	exit;
}
if($motherName== "")
{
	header("location:practice.php?err=9");
	exit;
}
if($fatherNumber== "")
{
	header("location:practice.php?err=10");
	exit;
}
if($motherNumber== "")
{
	header("location:practice.php?err=11");
	exit;
}
if($email1== "")
{
	header("location:practice.php?err=12");
	exit;
}
if($address== "")
{
	header("location:practice.php?err=13");
	exit;
}
	$sql = $conn->prepare("insert into tbl1students(firstName,studentDOB,studentPhone,studentId,studentGender,studentEmail,studentPassword,father,mother,fNumber,mNumber,parentsEmail,houseAddress) VALUES (:firstName,:studentDOB,:studentPhone,:studentId,:studentGender,:studentEmail,:studentPassword,:father,:mother,:fNumber,:mNumber,:parentemail,:houseAddress)");
	$sql->bindParam(':firstName',$_REQUEST["firstName"]);
	$sql->bindParam(':studentDOB', $_REQUEST["date"]);
	$sql->bindParam(':studentPhone', $_REQUEST["phoneNumber"]);
	$sql->bindParam(':studentId', $_REQUEST["classId"]);
	$sql->bindParam(':studentGender', $_REQUEST["gender"]);
	$sql->bindParam(':studentEmail', $_REQUEST["email"]);
	$sql->bindParam(':studentPassword', $_REQUEST["password"]);
	$sql->bindParam(':father', $_REQUEST["fatherName"]);
	$sql->bindParam(':mother', $_REQUEST["motherName"]);
	$sql->bindParam(':fNumber', $_REQUEST["fatherNumber"]);
	$sql->bindParam(':mNumber', $_REQUEST["motherNumber"]);
	$sql->bindParam(':parentemail', $_REQUEST["email1"]);
	$sql->bindParam(':houseAddress', $_REQUEST["address"]);
	$sql->execute();
	
	
	$conn = null;
	
?>