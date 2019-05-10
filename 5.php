
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
      <p> MY FRIEND, HIDE A NUMBER FROM 1 TO 9 </p>
      <button onclick="f1()">OK</button>
   </div>
   <div id="two" style="display: none;">
      <p> NOW ADD ALL NUMBERS FROM 1 TO 9 </p>
      <button onclick="f2()">OK</button>
   </div>
   <div id="three" style="display: none;">
      <p> NOW SUBTRUCT THE HIDDEN NUMBER FROM THE PREVIOUS ADDITION </p>
      <button onclick="f3()">OK</button>
   </div>
   <div id="form" style="display: none;">
      <form action="" method="post">
          <input type="number" name="ans" placeholder="Enter the last output : :" required> <br>
          <input type="submit" name="submit" value="OK">
      </form>
   </div>
   <?php 
if(isset($_POST['submit'])){
    $FR = $_POST['ans'];
    $guess=45 - $FR;
        echo "<div id='hide'>";
        echo "<p>YOUR HIDDEN NUMBER IS: ".$guess."<p></div>";
}
?>
   <img src="img/Index.jpg" height="200" width="500" >
</div><!--- end of wrapper div --->
  
   <?php include("Datalist.php");  ?>
</body>
</html>