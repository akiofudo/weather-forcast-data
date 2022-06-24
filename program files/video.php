<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
	<style>
		*{  
			margin: 0;
            padding: 0;
            box-sizing: border-box;
		}
		body{

		}
		.container{
			position:fixed;
			height: 100vh;
		    width: 100%;
		    background-size:cover;
		    background-position: center center;
			
			
		}
		video{
			position: absolute;
			left: 50%;
			top:50%;
			transform: translate(-50%,-50%);
			width: 1336px;
		}
	</style>
</head>
<body>

	<script type="text/javascript">
		function vifun(){
		   window.location.replace('index.html');
		   	
		   }
		
	
	</script>
 <form name="form2" onclick = "return vifun()">    
<div class="container">
<video name="intro" autoplay="autoplay" playsinline="playsinline" preload="metadata" data-aos="fade-up">
	<source src="./intro2.mp4" type="video/mp4">
</video>
</div>
</form>
</body>
</html>