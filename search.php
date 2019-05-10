    
<html>
<body>

<?php
    $url = $_POST["searchbox"];
    $url = strtolower( $url );
    switch($url) {
        case "Depression":
        case "depression":
        case "Depresion":
        case "depresion":    
        case "deprasion":
        case "deprason":
        case "Deprasion":
        case "Deprason":
        case "Defration":
            header( "Location: https://en.wikipedia.org/wiki/Depression" );
            break;
            
        case "Health":
        case "Helth":
        case "Halth":
        case "Hlth":
        case "Hlt":
        case "health":
        case "helth":
        case "halth":
        case "hlth":
        case "hlt":
            header( "Location: https://en.wikipedia.org/wiki/Health" );
            break;
            
        case "Mindset":
        case "Mindst":
        case "mindset":
        case "mindst":
        case "mndst":
        case "Mndst":
        case "Mndset":
        case "mndset":
            header( "Location: https://en.wikipedia.org/wiki/Mindset" );
            break;
            
        case "Peace":
        case "Piece":
        case "peace":
        case "piece":
        case "pece":
        case "pice":
            header( "Location: https://en.wikipedia.org/wiki/Peace" );
            break;
        
        case "Relaxation":    
        case "relaxation":
        case "Relxation":
        case "relxation":
        case "Relaxtion":
        case "relaxtion":
        case "Relxtion":
        case "relxtion":
        case "Relxton":
        case "relxton":            
            header( "Location: https://en.wikipedia.org/wiki/Relaxation" );
            break;    
            
        case "Concentration":    
        case "concentration":
        case "Cncentration":
        case "cncntration":
        case "cncntraton":
        case "Cncentration":
        case "Cncntration":
        case "Cncntraton":
            header( "Location: https://en.wikipedia.org/wiki/Concentration" );
            break;    
            
        case "Mind":    
        case "mind":
        case "mnd":
        case "Mnd":
            header( "Location: https://en.wikipedia.org/wiki/Mind" );
            break;    
            
        case "Meditation":    
        case "meditation":
        case "Maditation":    
        case "maditation":
        case "Mditation":
        case "mditation":    
        case "Mdtation":
        case "mdtation":
        case "Mdtaton":    
        case "mdtaton":
            header( "Location: https://en.wikipedia.org/wiki/Meditation" );
            break;    
        
        default:
            echo "Check your pronunciation";
            echo "<br>";
            echo "<a href='index.php'>HOME</a>";
            break;
    }
?>

</body>
</html>