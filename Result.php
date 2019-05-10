<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>  
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
</head>
<body bgcolor="#e1e1e1">
<?php include("search_helper.php"); ?>
<div id="wrapper">

<center><font face="Andalus" size="5">Your Score</font></center>
<br />
<br />
    <?php   
    if(isset($_POST['submit'])){
        $no = 0; $yes = 0;
        
        for($i = 1;$i<=75; $i++)
        {
            if(!isset($_POST['q'.$i]) ){
                echo " All is required ";
                header("location: MentalityTester.php");
            }
        }
        
        for($i = 1; $i <= 75; $i++){
            if($i == 12 || $i == 13 || $i == 16 || $i == 19 || $i == 20 || $i == 22 || $i == 24 || $i == 25 || $i == 32 || $i == 35 || $i == 37 || $i == 39 || $i == 43 || $i == 45 || $i == 46 || $i == 50 || $i == 53 || $i == 55 || $i == 60 || $i == 65 || $i == 73){
                if($_POST['q'.$i] == 'yes'){
                    $yes++;
                    //echo $i." hi";
                    //echo $i." hi";
                }
            } else {
                if($_POST['q'.$i] == 'no'){
                  $no++;  
                    //echo $i." bye";
                }
            }
        }
        $score = 300 - 4 * ($yes + $no);
        echo "<br>";
        if($score == 300)
        {
            echo " Perfect(Very Rare) ";
        }
        else if($score>=275 && $score<=299)
        {
            echo " Good(Above Average) ";
        }
        else if($score>=200 && $score<=274)
        {
            echo " Fair(Average) ";
        }
        else if($score>=100 && $score<=199)
        {
            echo " Poor(Below Average) ";
        }
        else if($score < 100)
        {
            echo " Unsatisfactory ";
        }
        echo "<br>";
        echo "Your score: ".$score;
        
    }
echo "<br>";
echo "<a href='index.php'>HOME</a>";
?>    
<img src="img/Index.jpg" height="200" width="500" >
</div><!--- end of wrapper div --->
<?php include("Datalist.php");  ?>    
</body>
</html>