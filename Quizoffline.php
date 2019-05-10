<?php

####################################################################################################################################################
#                                                      [ QUIZ ]                                                         #
####################################################################################################################################################

?>
<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>  
<link rel="icon" type="image/png" href="img/logo.png">  
<?php include("nav_helper.php"); ?>

        
<style type='text/css'>
    #wrapper {
         width:1300px;
         height:550px;
         padding: 13px;
         margin-right:auto;
         margin-left:auto;
         background-color: lightslategray;
	
    }
    img{
        margin: -5px;
    }
    h3{
        color: #000033;
    }
    div{
        color: maroon;
    }
</style>
<link rel="stylesheet" type="text/css" href="stylenew.css">
</head>

<body bgcolor='#e1e1e1'>
<?php include("search_helper.php"); ?>    

<?php


	//Creating random number s
	$rid = rand(1,3);
	//echo $rid;
?>

<div id='wrapper'>
    <center><font face='Andalus' size='5'><b> Quiz on Mind. </b></font></center>
    <img src="img/Quiz1.jpg" height="100" width="180" >
<?php
if ($rid == 1){
	
	echo "
<form action='process.php?id=1' method='post' id='quizForm' id='1'>


	<ol>
    
   
    	<li>
        <h3>(*)If you were running a race and you passed the person in 2nd place, what place would you be in now ?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A)2nd  </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B)1st  </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C)3rd  </label>
        </div>
        </li>
        <br>
     
        <li>
        <h3>(*)A farmer has five haystacks in one field and four haystacks in another. How many haystacks would he have if he combined them all in one field ?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A)9  </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B)1  </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C)5  </label>
        </div>
        </li>
        
        <br>
        
         <li>
        <h3>(*)If you feed me and I live, but give me a drink and I die. What am I ?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)Air </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B)Soil  </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C)Fire  </label>
        </div>
        </li>
        <br>
    </ol>
    <br>
     <input type='submit' value='Submit Quiz' />
    
</form>";

}

if ($rid == 2){
	
	echo "


<form action='process.php?id=2' method='post' id='quizForm' id='2'>


	<ol>
    
    
    	<li>
        <h3>(*)What is always coming but never arrives ?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A)Tomorrow  </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B)Distress  </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C)Happiness  </label>
        </div>
        </li>
        
        <br>
        <li>
        <h3>(*)If you peel my skin I won’t cry… but you will. What am I ?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A)Frog  </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B)Onion  </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C)Potato  </label>
        </div>
        </li>
        <br>
       
         <li>
        <h3>(*)What is it that if you have, you want to share me, and if you share, you do not have ?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)A promise  </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B)A incident  </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C)A secret  </label>
        </div>
        </li>
        <br>
    </ol>
    <br>
     <input type='submit' value='Submit Quiz' />
    
</form>";
}

if ($rid == 3){
	
	echo "
<form action='process.php?id=3' method='post' id='quizForm' id='3'>


	<ol>
    
   
    	<li>
        <h3>(*)If you have a bowl with six apples and you take away four in your hands, how many do you have ?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A)4  </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B)2  </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C)6  </label>
        </div>
        </li>
        
        <br>
        <li>
        <h3>(*)If you divide 30 by half and add ten, what do you get ? </h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A)12  </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B)70  </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C)14  </label>
        </div>
        </li>
        
        <br>
        
         <li>
        <h3>(*)Which room has no walls? ? </h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)Classroom  </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B)Bedroom  </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C)Mushroom  </label>
        </div>
        </li>
        <br>
    </ol>
    <br>
     <input type='submit' value='Submit Quiz' />
     </form>";
    }
    
    ?>
    </div>
    <?php include("Datalist.php");  ?>
</body>
</html>