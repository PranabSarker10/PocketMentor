<?php 
if(isset($_POST['submit'])){
       $M = $_POST['a2'];
    $D = $_POST['a1'];
    $Y = $_POST['a3'];
        
 if($M==1)
 {
     $M=11;
     $Y=$Y-1;
 }  		
 else if($M==2)
 {
     $M=12;
     $Y=$Y-1;
 }
 else if($M==3)
 {
     $M=1;
 }
 else if($M==4)
 {
     $M=2;
 }
 else if($M==5)
 {
     $M=3;
 }
 else if($M==6)
 {
     $M=4;
 }
 else if($M==7)
 {
     $M=5;
 }
 else if($M==8)
 {
     $M=6;
 }		
 else if($M==9)
 {
     $M=7;
 }		
 else if($M==10)
 {
     $M=8;
 }		
 else if($M==11)
 {
     $M=9;
 }				        
 else if($M==12)
 {
     $M=10;
 }		




$Y_1st_two=floor($Y/100);
$Y_last_two= $Y-($Y_1st_two*100);
$M_PRE_OUT= 2.6 * $M;
$FIRST_PRE=($M_PRE_OUT-0.2);
$FIRST=floor($FIRST_PRE);
$SECOND = floor($Y_last_two/4);
$THIRD = floor($Y_1st_two/4);
$A = $FIRST+$D+$Y_last_two+$SECOND+$THIRD-(2*$Y_1st_two);



$wanted_day;

if($A<0)
{
     $A=abs($A);
     $A=$A%7;
     $wanted_day=7-$A;
}
$wanted_day=$A%7;




if($wanted_day==6)
 {
     echo "SATURDAY";
 }
 else if($wanted_day==0)
 {
    echo  "SUNDAY";
 }
 else if($wanted_day==1)
 {
    echo "MONDAY";
 }				 
 else if($wanted_day==2)
 {
     echo "TUESDAY";
 }
 else if($wanted_day==3)
 {
     echo "WEDNESDAY";
 }
 else if($wanted_day==4)
 {
     echo "THUSDAY";
 }
 else if($wanted_day==5)
 {
     echo "FRIDAY";
 }
}
?>


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
        var s1, s2,s3;
    function f0(){
        var x = document.getElementById('zero');
        x.style.display = "none";
        var y = document.getElementById('one');
        y.style.display = "block";
        document.getElementById('final').innerHTML = "";
    }
        
    function f1(){
        var x = document.getElementById('one');
        var y = document.getElementById('form');
        x.style.display = "none";
        y.style.display = "block";
    }
    function f(){
        s1 = document.getElementById("a1").value;
        s2 = document.getElementById("a2").value;
        s3 = document.getElementById("a3").value;
        var x = document.getElementById('form');
        var y = document.getElementById('ans');
        x.style.display = "none";
        y.style.display = "block";
    }  
        function hide(){
            document.getElementById('form').style.display = "none";
        }
    </script>
</head>
<body>
  <div id="zero">
      <button onclick="f0()">OK</button>
  </div>
   <div id="one" style="display: none;">
      <p> Dear friend,if you input date,month & year of a day, I can tell you the day. </p>
      <button onclick="f1()">OK</button>
   </div>
   
   <div id="form" style="display: none;">
     <form action="" method="post">
      <input type="number" name="a1" id="a1" placeholder="Enter Date:" required> <br>
      <input type="number" name="a2" id="a2" placeholder="Enter Month number:" required> <br>
      <input type="number" name="a3" id="a3" placeholder="Enter Year >=1000:" required> <br>
      <input type="submit" name="submit" onclick="hide()">
      </form>
   </div>
<p id = "ans"></p>
</body>
</html>