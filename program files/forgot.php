<?php

    $connect = mysqli_connect('localhost' ,'root','','data_collector');
    if(isset($_POST['submit'])){
        $newpassword =$_POST['newpassword'];
        $conpassword =$_POST['conpassword'];
        $email =$_GET['email'];
        if($newpassword==$conpassword){
        $changepass =mysqli_query($connect,"UPDATE signin SET password='".$newpassword."' WHERE email ='".$email."'");
        if($changepass){
            echo 'your password is changed';
            header('Refresh:2:url=index.html');
        }else{
            echo 'error';
        }

     }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mizuki mise</title>
    <script src="./log.js"></script>
    <style>
         *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            color: black;
            font-family: "open sans";
        }
        section{
         position: relative;
         height: 100vh;
         width:100%;
         background-image: url("./wall/wall10.png");
         background-size: cover;
         background-position: center center;
        }
        .containerfor{
        position: absolute;
        top: 50%;
        left:50%;
        transform: translate(-50%, -50%);
        background: linear-gradient(black);
        width: 380px;
        padding: 50px 30px;
        border-radius: 10px;
        box-shadow: 7px 7px 60px black;
        font-weight: bold;
        
        }
        h1{
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 2em;
            font-size: 2em;
            color: white;
        }
        .pass input{
            padding: 10px;
            width: 100%;
            display: block;
            margin: 1em;
            border: none;
            outline: none;

        }
        .pass input[type="submit"]{
            margin-top: 2em;
            background: crimson;
            text-transform: uppercase;
            font-weight: bolder;
        }
        .pass input[type="submit"]:hover{
            background:purple;

        }

    </style>
</head>
<body>
    <section>
        <div class="containerfor">
    
            <form  name="form3" onsubmit="return forfun()" method="post">
                <h1>Forgot password ?</h1>

                <div class="pass">
                <label>New password</label>
                <input type="password" name="newpassword" placeholder="enter your newpassword" required="">
                </div>
                
                <div class="pass">
                <label>confrim password</label>
                <input type="password" name="conpassword" placeholder="re-write the password" required="" >
                </div>
                
                
                <div id="error" style="color: red; text-align: center; text-transform:uppercase;"></div>
    
               <div class="pass">
                <input type="submit" name="submit" value="confrim">
              
            </form>
        </div>
        </section>
</body>
</html>