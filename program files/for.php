<?php
   //connection
 $connect = mysqli_connect('localhost' ,'root','','data_collector');
 if(isset($_POST['submit'])){
 $email = $_POST['email'];
 $check_email=mysqli_query($connect,"SELECT * FROM signin where email='".$email."'");
 if(mysqli_num_rows($check_email)==1){
    header('Location:forgot.php?email='.$email);
}else{
    echo '<script type="text/javascript">
       alert("wrong email or its not exist") </script>';
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password mizuki mise</title>
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
    
            <form  method="post">
                <h1>Forgot password ?</h1>

                <div class="pass">
                <label>email</label>
                <input type="email" name="email" placeholder="enter your email" required="">
                </div>
                
    
               <div class="pass">
                <input type="submit" name="submit" value="confrim">
                </div>
              
            </form>
        </div>
        </section>
</body>
</html>