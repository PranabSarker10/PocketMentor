

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" type="image/png" href="img/logo.png">  
    <link rel="stylesheet" type="text/css" href="stylenew.css">  
    <?php include("nav_helper.php"); ?>  
    <style type="text/css">
    #wrapper {

        width:950px;
         height:auto;
         padding: 13px;
         margin-right:auto;
         margin-left:auto;
         background-color:#fff;
    }
    img{
         margin-left: 220px;
    }
    </style>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <script>
    function f0(){
        var x = document.getElementById('zero');
        x.style.display = "none";
        var y = document.getElementById('one');
        y.style.display = "block";
        var z = document.getElementById('hide');
        z.style.display = "none";
        
    }
        
    function f1(){
        var x = document.getElementById('one');
        var y = document.getElementById('two');
        x.style.display = "none";
        y.style.display = "block";
    }
    
    function f2(){
        var x = document.getElementById('two');
        var y = document.getElementById('form');
        x.style.display = "none";
        y.style.display = "block";
    }
    
    </script>
</head>
<body bgcolor="#e1e1e1">
<?php include("search_helper.php"); ?>
<div id="wrapper">
<center><font face="Andalus" size="5">Look At !!</font></center>
  <div id="zero">
      <button onclick="f0()">OK</button>
  </div>
   <div id="one" style="display: none;">
      <p> Take a number greater than 19. </p>
      <button onclick="f1()">OK</button>
   </div>
   <div id="two" style="display: none;">
      <p> Now subtract the addition of all digits of your taken number from the taken number.\n (Example: If you taken 678 then the addition of all digits is : 6+7+8=21. And sutration is : 678-21=657.) </p>
      <button onclick="f2()">OK</button>
   </div>
   <div id="form" style="display: none;">
      <form action="" method="post">
          <p> Now hide one digit from your last output and input other digit(s) without giving any space. \n (Example: If your last output is: 657 and your hide number is 5 then input is 67.) </p>
          <input type="number" name="ans" placeholder="Give Input" required> <br>
          <input type="submit" name="submit" value="OK">
      </form>
   </div>
     <?php 
if(isset($_POST['submit'])){
    $sum = 0;
    $output = 0;
    $i = $_POST['ans'];
        if($i > 9)
        {
            while($i>0)
            {
                $sum += $i%10;
                $i/=10;
            }    
            $output=$sum-9;
            while($output>9)
            {
                $output -= 9;
            }
        }
        else
        {
            $output = $i;
        }

        $hidden_number = 9 - $output;
        echo "<p id='hide'>Your hidden_number is : ".$hidden_number."</p>";
}
?>

      <img src="img/Index.jpg" height="200" width="500" >
</div><!--- end of wrapper div --->
  
   <?php include("Datalist.php");  ?>
</body>
</html>