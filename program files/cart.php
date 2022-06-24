<?php
session_start();
error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family:"Reggae one";
		}
		header{

			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			height: 150px;
			position: relative;
		}
		.overlay{
			position: relative;
			z-index: 1;
			top: 0;
			left: 0;
			height: 100%;
			right: 0;
			bottom: 0;
			padding: 0 !important;
			margin: 0 !important;

		}
		nav{
			position: absolute;
			top: 0;
			right: 0;
			left: 0;
			z-index: 2;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			padding: 50px 60px 0 60px;

		}
		nav li{
			list-style: none;
			display: inline-block;
			padding-right:  10px;
			padding-left: 10px;


		}
		nav li span{
			padding-left: 5px;

		}
		li a{
			padding: 5px;
			background-color: darkblue;
			text-decoration: none;
			color: white;
		}
		.cart a{
			background-color: darkblue;
			color: white;
			cursor: pointer;
			text-decoration: none;
		}
		h2{
			background-color: white;
		}
		body{
			background-image: url("./wall/wall9.jpg");
			background-position: center;
			background-size: cover;
		}
		.products-container{
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
			padding-bottom: 100px;
		}
		.products-container{
			max-width: 800px;
			justify-content:space-around;
			margin: 0 auto;
			margin-left:300px;
			border: 20px solid black;
			border-radius: 20px;
			background-color: white;

		}
		.products-container input[type="button"]{
			font-size: 15px;
			background-color: blue;
			color: white;
			margin-left: 10px;
			margin-right: 10px;
			cursor: pointer;
		}
		.qtyid{
			width: 40px;
			height: 20px;
		}
		
		.product-header{
			width: 100%;
			max-width: 650px;
			display: flex;
			justify-content: flex-start;
			border-bottom: 4px solid black;
			margin: 0 auto;
			
		}
		.product-title{
			width:45%;
					
		}
		.price{
			width:15%;
			border-bottom: 1px solid black;
			display: flex;
			align-items: center;
			font-weight: 800;

		}
		.quantity{
			width:20%;
			border-bottom: 1px solid black;
			display: flex;
			align-items: center;
			font-weight: 800;
		}
		.total{
			width:10%;
			border-bottom: 1px solid black;
			display: flex;
			align-items: center;
			font-weight: 800;
		}
		.product{
			width: 45%;
			display: flex;
			justify-content: space-around;
			align-items: center;
			padding: 10px 0;
			border-bottom: 1px solid black;
			font-weight: 800;
			

		}
		.products{
			width: 100%;
			display: flex;
			flex-wrap: wrap;

		}
		.products img{
			width: 75px;

			
		}
	
		.basketTotalContainer{
			display: flex;
			justify-content: flex-end;
			width: 100%;
			padding: 10px 0;

		}
		.basketTotaltitle{
			width:30%;
			font-weight: 900;

		}
		.baskettotal{
			width: 20%;
			font-weight: 900;

		}
		img{
           margin-right: 10px;
           margin-left: 20px;
           position: relative;
           overflow: hidden;
        }
        .order{
        	text-align: center;
        	padding: 20px;
        }
        .order a:link ,a:visited {
        	background-color: darkblue;
        	color: white;
        	text-align: center;
        	padding: 20px;
        	border:black;
        	border-radius: 20px;
        	text-decoration: none;
        	display:inline-block;


        }
        .order a:hover,a:active{
        	background-color:crimson;
        	color: white;
        }
        .showorder{
        	display: block;
        	background-color: white;
        	border: solid 4px;
        	border-radius: 8px;

        }
		

		


		}
	</style> 
	<link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
</head>
<body>	
	<header>
		<div class="overlay"></div>
		<nav>
			<h2>SHOP</h2>
			<ul>
				<li><a href="home2new.html">HOME</a></li>
				<li class="cart">
					<a href="cart.html">CART<span style="color: red">0</span></a>
				</li>
			</ul>
		</nav>		
   </header>
<section>
	<div class="products-container">
		 <div class="product-header">
		 	  <h3 class="product">product</h3>
		 	  <h3 class="price">price</h3>
		 	  <h3 class="quantity">quantity</h3>
		 	  <h3 class="total">total</h3>
		 	  <a href="cart.php" style="color: red; border:solid blue 2px; border-radius: 4px;text-align: center; margin-top:4px; margin-bottom: 4px;" onclick="remove()">Remove all</a>
		 </div>

		
		<div class="products">

		</div>
	</div>
	<div class="order">
		<a href="placeorder.html"><h1>PLACE ORDER</h1></a>
	</div class="showorder">
	<?php
	$eemail="email";
	$namee="name";
	$pphone="phone number";
	$address="address";
	echo"<div class=\"sh\" style=\"font-size:2vw; text-align:center; border:solid 20px; border-radius:4px; background-color:white;\">";
	echo "<h2 style=\"color:blue \">your address information</h2>";
	 echo$eemail.":".$_SESSION['rece'];
	 echo "<br>";
     echo $namee.":".$_SESSION['user'];
     echo"<br>";
     echo$pphone.":". $_SESSION['phone'];
     echo"<br>";
     echo$address.":". $_SESSION['add'];
     echo"</div>";
     

	?>
	<div>
		
	</div>
</section>
<script>
	function remove(){
		localStorage.removeItem("totalcost");
		localStorage.removeItem("productsincart");
		localStorage.removeItem("cartnumber");

	}

</script>



<script src="./main.js"></script>
<script src="./main2.js"></script>
<script src="./main3.js"></script>
<script src="./main4.js"></script>
<script src="./main5.js"></script>
<script src="./main6.js"></script>

</body>
</html>
