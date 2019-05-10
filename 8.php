

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
        var y = document.getElementById('four');
        x.style.display = "none";
        y.style.display = "block";
    }
        
    function f4(){
        var x = document.getElementById('four');
        var y = document.getElementById('five');
        x.style.display = "none";
        y.style.display = "block";
    }
        
    function f5(){
        var x = document.getElementById('five');
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
      <p> Dear friend, here I will give you 5 positions <br> Kindly choice one of them. </p>
      <button onclick="f1()">OK</button>
   </div>
   <div id="two" style="display: none;">
      <p> 1.Army <br> 2.Boxer <br> 3.Doctor <br> 4.Officer <br> 5.Engineer <br> Which you wanted to be ?? </p>
      <button onclick="f2()">OK</button>
   </div>
   <div id="three" style="display: none;">
      <p> Count your wanted position's total alphabet's number. </p>
      <button onclick="f3()">OK</button>
   </div>
   <div id="four" style="display: none;">
      <p> Multiply 10 with the previous number and then add 12 with that. </p>
      <button onclick="f4()">OK</button>
   </div>
   <div id="five" style="display: none;">
      <p> Now, again multiply 5 with the previous number and then add 64 with that. </p>
      <button onclick="f5()">OK</button>
   </div>
   <div id="form" style="display: none;">
      <form action="" method="post">
          <input type="number" name="ans" placeholder="Enter last output" required> <br>
          <input type="submit" name="submit" value="OK">
      </form>
   </div>
   <?php 
if(isset($_POST['submit'])){
    $FR = $_POST['ans'];
    $guess=$FR%7;
    $position=$guess+2;
    if($position==4) {
        echo "<div id='hide'>";
        echo "<p>You wanted to be an ARMY.<p></div>";
    }
    else if($position==5) {
        echo "<div id='hide'>";
        echo "<p>You wanted to be a BOXER.<p></div>";
    }
    else if($position==6) {
        echo "<div id='hide'>";
        echo "<p>You wanted to be an DOCTOR.<p></div>";
    }
    else if($position==7) {
        echo "<div id='hide'>";
        echo "<p>You wanted to be an OFFICER.<p></div>";
    }
    else if($position==4) {
        echo "<div id='hide'>";
        echo "<p>You wanted to be an ENGINEER.<p></div>";
    }
}
?>
<img src="img/Index.jpg" height="200" width="500" >
</div><!--- end of wrapper div --->
  
   <?php include("Datalist.php");  ?>
</body>
</html>