<?php
$email = $_POST['email'];
$password = $_POST['password'];

//database connection here

$con =new mysqli("localhost","root","","data_collector");

if($con->connect_error){
	die("failed to connect :".$con->connect_error);
}
else{
	$stmt = $con->prepare("select * from signin where email = ?");
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows >0){
        $data =$stmt_result->fetch_assoc();
        if($data['password']===$password){
        	echo "LOGIN IS SUCESSFULL";
        	header("Location:home2new.html");
            exit();
        }else{
        	echo"INVALID EMAIL OR PASSWORD";
        	header("Location:index.html");
            exit();
        }
	}else{
		echo "INVALID EMAIL OR PASSWORD";
		header("Location:index.html");
        exit();
	}

}


?>