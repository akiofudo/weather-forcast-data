<?php
$email = $_POST['email'];
$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];

if (!empty($email) || !empty($name) || !empty($phonenumber) || !empty($address) )

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
    $SELECT = "SELECT email from placeorder where email =? Limit 1";
    $INSERT = "INSERT Into placeorder (email,name,phonenumber,address)values(?,?,?,?)"; 
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
    $stmt->bind_param("ssss",$email ,$name, $phonenumber,$address);
    $stmt->execute();
    echo '<script>alert("your data is saved")</script>';
    session_start();
    $_SESSION['rece']="$email";
    $_SESSION['user']="$name";
    $_SESSION['phone']="$phonenumber";
    $_SESSION['add']="$address";

    header("Location:mail.php");
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
