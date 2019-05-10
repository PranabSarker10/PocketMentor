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
        var s1, s2,s3,s4,s5,s6;
    function f0(){
        var x = document.getElementById('zero');
        x.style.display = "none";
        var y = document.getElementById('one');
        y.style.display = "block";
        document.getElementById('final').innerHTML = "";
    }
        
    function f1(){
        var x = document.getElementById('one');
        var y = document.getElementById('form1');
        x.style.display = "none";
        y.style.display = "block";
    }
    function fy(){
        s1 = document.getElementById("a1").value;
        s2 = document.getElementById("a2").value;
        s3 = document.getElementById("a3").value;
        var x = document.getElementById('form1');
        var y = document.getElementById('two');
        x.style.display = "none";
        y.style.display = "block";
    } 
    function f2(){
        var x = document.getElementById('two');
        var y = document.getElementById('form2');
        x.style.display = "none";
        y.style.display = "block";
    }
        
    function fz(){
        s4 = document.getElementById("a4").value;
        s5 = document.getElementById("a5").value;
        s6 = document.getElementById("a6").value;
        var x = document.getElementById('form2');
        var y = document.getElementById('three');
        x.style.display = "none";
        y.style.display = "block";
    }     
    
    function f3(){
        var x = document.getElementById('three');
        var y = document.getElementById('four');
        x.style.display = "none";
        y.style.display = "block";
        document.getElementById('show4').innerHTML = "Now, "+s1+" takes 1, "+s2+" takes 2 and "+s3+" takes 3 color pencil(s) from the packet.";
    }
    function f4(){
        var x = document.getElementById('four');
        var y = document.getElementById('five');
        x.style.display = "none";
        y.style.display = "block";
        document.getElementById('show5').innerHTML = "Now, who has hidden "+s4+", again take same number of pencil(s), you have taken before from the packet; <br> Who has hidden "+s5+" again take double number of pencil(s), you have taken before from the packet and <br> Who has taken "+s6+" again take fourfold number of pencil(s), you have taken before from the packet.";
    }
    
    function f5(){
        var x = document.getElementById('five');
        var y = document.getElementById('form3');
        x.style.display = "none";
        y.style.display = "block";
    }
     function calc() {
         document.getElementById('form3').style.display = "none";
         var val = document.getElementById('ans7').value;
         document.getElementById('final').innerHTML = "Mehedi"+val;
         if(val==1) {
             document.getElementById('final').innerHTML = s1+" have taken "+s4+", "+s2+" have taken "+s5+" and "+s3+" have taken "+s6;
         } else if(val == 3){
             document.getElementById('final').innerHTML = s1+" have taken "+s4+", "+s2+" have taken "+s6+" and "+s3+" have taken "+s5;
         } else if(val == 2) {
             document.getElementById('final').innerHTML = s1+" have taken "+s5+", "+s2+" have taken "+s4+" and "+s3+" have taken "+s6;
         } else if(val == 5){
             document.getElementById('final').innerHTML = s1+" have taken "+s5+", "+s2+" have taken "+s6+" and "+s3+" have taken "+s4;
         } else if(val == 6) {
             document.getElementById('final').innerHTML = s1+" have taken "+s6+", "+s2+" have taken "+s4+" and "+s3+" have taken "+s5;
         } else if(val == 7) {
             document.getElementById('final').innerHTML = s1+" have taken "+s6+", "+s2+" have taken "+s5+" and "+s3+" have taken "+s4;
         } 
         document.getElementById('zero').style.display = "block";
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
      <p> Dear friend, to play this game, call your two other friends. <br> Because in this interesting game, I need in total 3 persons. </p>
      <button onclick="f1()">OK</button>
   </div>
   
   <div id="form1" style="display: none;">
      <input type="text" name="ans1" id="a1" placeholder="Enter your name(ALL ARE CAPITAL LETTERS):" required> <br>
      <input type="text" name="ans2" id="a2" placeholder="Enter one of your friend name(ALL ARE CAPITAL LETTERS):" required> <br>
      <input type="text" name="ans3" id="a3" placeholder="Enter another of your friend name(ALL ARE CAPITAL LETTERS):" required> <br>
      <button onclick="fy()">OK</button>
   </div>
   
   <div id="two" style="display: none;">
      <p> Take 3 small stationary things by which the game will start. </p>
      <button onclick="f2()">OK</button>
   </div>
   
   <div id="form2" style="display: none;">
      <input type="text" name="ans4" id="a4" placeholder="Enter one of your taken things(ALL ARE CAPITAL LETTERS):" required> <br>
      <input type="text" name="ans5" id="a5" placeholder="Enter another one of your taken things(ALL ARE CAPITAL LETTERS):" required> <br>
      <input type="text" name="ans6" id="a6" placeholder="Enter the last one of your taken things(ALL ARE CAPITAL LETTERS):" required> <br>
      <button onclick="fz()">OK</button>
   </div>
   
   <div id="three" style="display: none;">
      <p> As I like to draw picture, so think I have put a packet of color pencil(s) on the table(which has 24 different color pencils). </p>
      <button onclick="f3()">OK</button>
   </div>
   <div id="four" style="display: none;">
      <p id="show4"></p>
      <button onclick="f4()">OK</button>
   </div>
   <div id="five" style="display: none;">
      <p id="show5"></p>
      <button onclick="f5()">OK</button>
   </div>
   <div id="form3" style="display: none;">
      <p> Now, enter the number of pencil(s) present on the packet: </p>
      <input type="number" id="ans7" placeholder=" Enter the number of pencil(s) present on the packet: " required> <br>
      <button onclick="calc()">Submit</button>
   </div>
   <p id="final"></p>
   <img src="img/Index.jpg" height="200" width="500" >
</div><!--- end of wrapper div --->
  
   <?php include("Datalist.php");  ?>
</body>
</html>