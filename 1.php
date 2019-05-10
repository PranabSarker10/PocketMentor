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
        var y = document.getElementById('three');
        x.style.display = "none";
        y.style.display = "block";
    }
    
    function f3(){
        var x = document.getElementById('three');
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
      <p> Take your total brothers/brother number: </p>
      <button onclick="f1()">OK</button>
   </div>
   <div id="two" style="display: none;">
      <p> Now kindly add 1;then multiply 2;then add 3 and then multiply 5  (use calculator): </p>
      <button onclick="f2()">OK</button>
   </div>
   <div id="three" style="display: none;">
      <p> At last add your total sisters/sister number: </p>
      <button onclick="f3()">OK</button>
   </div>
   <div id="form" style="display: none;">
      <form action="" method="post">
          <input type="number" name="ans" placeholder="Enter the FINAL_RESULT and I will show how many brothers and sisters you have :" required> <br>
          <input type="submit" name="submit" value="OK">
      </form>
   </div>
<br />
<br />
<?php 
if(isset($_POST['submit'])){
    $FR = $_POST['ans'];
    $guess=$FR-25;
    if($guess >= 0 && $guess < 100) {
        $qutient =  $guess / 10;
        $remainder = $guess % 10;
        echo "<div id='hide'>";
        echo "<p>Total brother: ".floor($qutient)."</p>";
        echo "<p>Total sister: ".$remainder."<p></div>";
    }
    else if($guess < 0 || $guess >= 100) {
        echo "<p id='hide'> YOU ARE TELLING LIE!!!!!!         OR          YOUR FAMILY HAVE NOT MAINTAIN FAMILY PLANNING : </p>";
    } 
}
?>
<img src="img/Index.jpg" height="200" width="500" >
</div><!--- end of wrapper div --->
  
   <?php include("Datalist.php");  ?>
</body>
</html>