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
        var y = document.getElementById('six');
        x.style.display = "none";
        y.style.display = "block";
    }
        
    function f6(){
        var x = document.getElementById('six');
        var y = document.getElementById('zero');
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
      <p> Think a number of 3 digits. </p>
      <button onclick="f1()">OK</button>
   </div>
   <div id="two" style="display: none;">
      <p>Now,Write the same number before the previous number which will give you a number of 6 digits. </p>
      <button onclick="f2()">OK</button>
   </div>
   <div id="three" style="display: none;">
      <p> Now,divide the number of 6 digits by 13(use calculator). </p>
      <button onclick="f3()">OK</button>
   </div>
   <div id="four" style="display: none;">
      <p> Again, divide the previous result by 11(use calculator). </p>
      <button onclick="f4()">OK</button>
   </div>
   <div id="five" style="display: none;">
      <p> At last, divide the previous result by 7(use calculator). </p>
      <button onclick="f5()">OK</button>
   </div>
   <div id="six" style="display: none;">
      <p> Isn't the result you have thought first ??\n HA HA HA HA !!!!! </p>
      <button onclick="f6()">OK</button>
   </div>
   <img src="img/Index.jpg" height="200" width="500" >
</div><!--- end of wrapper div --->
  
   <?php include("Datalist.php");  ?>
</body>
</html>