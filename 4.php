


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
      <p> Dear friend, my game is applicable for those whose ages are between 1 to 63. </p>
      <button onclick="f1()">OK</button>
   </div>
   <div id="two" style="display: none;">
      <p> I will show you 6 tables. And You have to Input 1 if age is present in that table else input 0 </p>
      <button onclick="f2()">OK</button>
   </div>
   
   <div id="form" style="display: none;">
      <form action="" method="post">
          <p>************(1)************</p>
          <p>           01 | 03 | 05 | 07 | 09 | 11 | 13 | 15      </p> 
          <p>           17 | 19 | 21 | 23 | 25 | 27 | 29 | 31      </p>
          <p>           33 | 35 | 37 | 39 | 41 | 43 | 45 | 47      </p>
          <p>           49 | 51 | 53 | 55 | 57 | 59 | 61 | 63      </p>
          <br>
          <input type="number" name="ans1" placeholder="For table 1 :" required> <br>
          <p>************(2)************</p>
          <p>           02 | 03 | 06 | 07 | 10 | 11 | 13 | 15      </p> 
          <p>           18 | 19 | 22 | 23 | 26 | 27 | 30 | 31      </p>
          <p>           34 | 35 | 38 | 39 | 42 | 43 | 46 | 47      </p>
          <p>           50 | 51 | 54 | 55 | 58 | 59 | 62 | 63      </p>
          <br>
          <input type="number" name="ans2" placeholder="For table 2 :" required> <br>
          <p>************(3)************</p>
          <p>           04 | 05 | 06 | 07 | 12 | 13 | 14 | 15      </p> 
          <p>           20 | 21 | 22 | 23 | 28 | 29 | 30 | 31      </p>
          <p>           36 | 37 | 38 | 39 | 44 | 45 | 46 | 47      </p>
          <p>           52 | 53 | 54 | 55 | 60 | 61 | 62 | 63      </p>
          <br>
          <input type="number" name="ans3" placeholder="For table 3 :" required> <br>
          <p>************(4)************</p>
          <p>           08 | 09 | 10 | 11 | 12 | 13 | 14 | 15      </p> 
          <p>           24 | 25 | 26 | 27 | 28 | 29 | 30 | 31      </p>
          <p>           40 | 41 | 42 | 43 | 44 | 45 | 46 | 47      </p>
          <p>           56 | 57 | 58 | 59 | 60 | 61 | 62 | 63      </p>
          <br>
          <input type="number" name="ans4" placeholder="For table 4 :" required> <br>
          <p>************(5)************</p>
          <p>           16 | 17 | 18 | 19 | 20 | 21 | 22 | 23      </p> 
          <p>           24 | 25 | 26 | 27 | 28 | 29 | 30 | 31      </p>
          <p>           48 | 49 | 50 | 51 | 52 | 53 | 54 | 55      </p>
          <p>           56 | 57 | 58 | 59 | 60 | 61 | 62 | 63      </p>
          <br>
          <input type="number" name="ans5" placeholder="For table 5 :" required> <br>
          <p>************(6)************</p>
          <p>           32 | 33 | 34 | 35 | 36 | 37 | 38 | 39      </p> 
          <p>           40 | 41 | 42 | 43 | 44 | 45 | 46 | 47      </p>
          <p>           48 | 49 | 50 | 51 | 52 | 53 | 54 | 55      </p>
          <p>           56 | 57 | 58 | 59 | 60 | 61 | 62 | 63      </p>
          <br>
          <input type="number" name="ans6" placeholder="For table 6 :" required> <br>
          <input type="submit" name="submit" value="OK">
      </form>
   </div>
<?php     
if(isset($_POST['submit'])){
    $t1 = $_POST['ans1'];
    $t2 = $_POST['ans2'];
    $t3 = $_POST['ans3'];
    $t4 = $_POST['ans4'];
    $t5 = $_POST['ans5'];
    $t6 = $_POST['ans6'];
    
    $ans = $t1 * 1 + $t2 * 2 + $t3 * 4 + $t4 * 8 + $t5 * 16 + $t6 * 32;
    echo "<p id='hide'>Your age is ".$ans."</p>";
}   
?>
   <img src="img/Index.jpg" height="200" width="500" >
</div><!--- end of wrapper div --->
  
   <?php include("Datalist.php");  ?>
</body>
</html>