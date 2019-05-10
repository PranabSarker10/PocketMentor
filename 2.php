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
        var s1, s2;
    function f0(){
        var x = document.getElementById('zero');
        x.style.display = "none";
        var y = document.getElementById('one');
        y.style.display = "block";
        
    }
        
    function f1(){
        var x = document.getElementById('one');
        var y = document.getElementById('form');
        x.style.display = "none";
        y.style.display = "block";
    }
    function fz(){
        s1 = document.getElementById("a1").value;
        s2 = document.getElementById("a2").value;
        var x = document.getElementById('form');
        var y = document.getElementById('two');
        x.style.display = "none";
        y.style.display = "block";
        document.getElementById("evens1").innerHTML = " Take an even number in which hand "+s1+" is present.";
    } 
    function f2(){
        var x = document.getElementById('two');
        var y = document.getElementById('three');
        x.style.display = "none";
        y.style.display = "block";
        document.getElementById("odds2").innerHTML = " Take an odd number in which hand "+s2+" is present.";
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
        var y = document.getElementById('six');
        x.style.display = "none";
        y.style.display = "block";
    }
    function f6(){
        var x = document.getElementById('six');
        var y = document.getElementById('seven');
        x.style.display = "none";
        y.style.display = "block";
    }
    
    function f7(){
        var x = document.getElementById('seven');
        var y = document.getElementById('eight');
        x.style.display = "none";
        y.style.display = "block";
    }
    function yes(){
        document.getElementById("message").innerHTML = s1+" is present in right hand and "+s2+" is present in left hand.";        
    }
    function no(){
        document.getElementById("message").innerHTML = s2+" is present in right hand and "+s1+" is present in left hand.";
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
      <p> Take your favorite two things in your two Hands.<br> I will show which thing in your which Hand. </p>
      <button onclick="f1()">OK</button>
   </div>
   
   <div id="form" style="display: none;">
      <input type="text" name="ans1" id="a1" placeholder="Input one favorite thing:" required> <br>
      <input type="text" name="ans2" id="a2" placeholder="Input another favorite thing:" required> <br>
      <button onclick="fz()">OK</button>
   </div>
   
   <div id="two" style="display: none;">
      <p id="evens1"></p>
      <button onclick="f2()">OK</button>
   </div>
   <div id="three" style="display: none;">
      <p id="odds2"></p>
      <button onclick="f3()">OK</button>
   </div>
   <div id="four" style="display: none;">
      <p> Now, multiply the right hand's number by the number which can be divided by 2 without any remainder\n(Remember) </p>
      <button onclick="f4()">OK</button>
   </div>
   <div id="five" style="display: none;">
      <p> Now, multiply the left hand's number by the number which can not be divided by 2 and creates remainder\n(Remember) </p>
      <button onclick="f5()">OK</button>
   </div>
   <div id="six" style="display: none;">
      <p> Now add the previous two multiplications. </p>
      <button onclick="f6()">OK</button>
   </div>
   <div id="seven" style="display: none;">
      <p> Now, divide the final result by two. </p>
      <button onclick="f7()">OK</button>
   </div>
  <div id="eight" style="display: none;">
      <p> Have you find any remainder ?? </p>
      <button onclick="yes()">Yes</button>
      <button onclick="no()">No</button>
      <p id="message"></p>
   </div>
   <img src="img/Index.jpg" height="200" width="500" >
</div><!--- end of wrapper div --->
  
   <?php include("Datalist.php");  ?>
</body>
</html>