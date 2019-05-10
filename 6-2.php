<?php
session_start();
if(isset($_POST['submit'])){
    $noOfInput = $_POST['ans1'];
    $firstNumber = $_POST['ans2'];
    
    $digit = strlen((string)$firstNumber);
    
    $val = 0;
    while($digit){
        $temp = $digit - 1;
        $val = $val + (9 * pow(10, $temp));
        $digit--;
    }
    echo "My prediction is that the ANSWER will be: ".($_POST['ans2'] + (($noOfInput - 1) * $val));
    $_SESSION['noOfInput'] = $noOfInput;
    $_SESSION['val'] = $val;
    
    for($i = 0, $k = 0; $i <= ($noOfInput - 2); $i = $i + 2, $k++){
       if($k == 0){
        echo "
        <div id='".$k."'>
            <input id='".$k."1' type='number' placeholder='Enter your number no".($i + 2)."'>
            <button onclick='hide()'>OK</button>
        </div>
        ";
       }
       else{
           echo "
        <div id='".$k."' style='display: none;'>
            <input id='".$k."1' type='number' placeholder='Enter your number no".($i + 2)."'>
            <button onclick='hide()'>OK</button>
        </div>
        ";
       }
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
        var k = 0;
        
    function hide() {
        document.getElementById(''+k).style.display = "none";
        var value = <?php echo json_encode($val); ?>;
        document.getElementById('myReply').innerHTML = "My value is "+(value - document.getElementById(''+k+'1').value);
        k++;
        document.getElementById(''+k).style.display = "block";
    }
    </script>
</head>
<body>
    <p id="myReply"></p>
</body>
</html>