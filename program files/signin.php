<?php
$email = $_POST['email'];
$uname = $_POST['uname'];
$password = $_POST['password'];

if (!empty($email) || !empty($uname) || !empty($password) )

{

$host ="localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="data_collector";

//create connection

$conn =new mysqli($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
	die('connect Error ('.mysqli_connect_errno() .')'
		.mysqli_connect_error());

}
else{
	$SELECT = "SELECT email from signin where email =? Limit 1";
	$INSERT = "INSERT Into signin (email ,uname,password)values(?,?,?)"; 
//prepare statement
	$stmt = $conn->prepare($SELECT);
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->store_result();
	$rnum =$stmt->num_rows;

	//checking username

	if ($rnum==0){
    $stmt->close();
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("sss",$email ,$uname, $password);
    $stmt->execute();
    echo "your account is sucessfully created";
    header("Location:video.php");
    exit();

 }  else{
 	 echo '<script type="text/javascript">
       alert("some already exist using this email") </script>';
 	
 }
 $stmt->close();
 $conn->close();
 }
} else{
	echo "all field are reqired";
	die();
}


?>

