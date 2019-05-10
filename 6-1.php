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
</head>
<body>
   <div id="form">
      <form action="6-2.php" method="post">
          <p> FRIEND, How many odd numbers you want to add(REMEMBER: Digits of every number have to be same) ?? </p>
          <input type="number" name="ans1" placeholder="How many odd numbers ??" required> <br>
          <em> All Numbers must have same length!!!</em>
          <p> Enter your 1st number : </p>
          <input type="number" name="ans2" placeholder="Enter the 1st number :" required> <br>
          <input type="submit" name="submit" value="OK">
      </form>
   </div>
</body>
</html>