<!DOCTYPE html>
<html>
<head>
    <title>Home</title>  
    <link rel="icon" type="image/png" href="img/logo.png">  
    <?php include("nav_helper.php"); ?>
    <link rel="stylesheet" type="text/css" href="stylenew.css">
    <style>
        body {
				background: url("img/mentor-.jpg");
				width: 98%;
				height:90%;
				background-size: cover;
                margin: top;
        }
            
        h1{
            color:cyan;
            margin-left: 560px;
        }   
        h2{
            color:blue;
        }
        h4{
            color:bisque;
        }
    </style>
</head>
    
<body>
    <?php include("search_helper.php"); ?> 
    <h1>Mentor</h1>
    <marquee scrollamount="8" direction="right" >
    <h2> 8 Mind Reading Games </h2>
    </marquee>
    
    <marquee scrollamount="10" direction="right" onmouseover="this.stop();" onmouseout="this.start();" >
    <a href="1.php">     
    <img src="img/1.jpg" height="300" width="350">
    </a>
    <a href="2.php">
    <img src="img/2.jpg" height="300" width="350">
    </a>
    <a href="3.php">
    <img src="img/3.jpg" height="300" width="350">
    </a>
    <a href="4.php">    
    <img src="img/4new.jpg" height="300" width="350">
    </a>
    <a href="5.php">
    <img src="img/5.jpg" height="300" width="350">
    </a>
<!--
    <a href="6.php">
    <img src="img/6.jpg" height="300" width="350">
    </a>
-->    
    <a href="7.php">
    <img src="img/7new.jpg" height="300" width="350">
    </a>
    <a href="8.php">
    <img src="img/8.jpg" height="300" width="350">
    </a>
    <a href="9.php">
    <img src="img/9.jpg" height="300" width="350">
    </a>
<!--    
    <a href="10.php">    
    <img src="img/10.jpg" height="300" width="350">
    </a>
-->    
    </marquee>
    <?php include("Datalist.php");  ?>
</body>
</html>