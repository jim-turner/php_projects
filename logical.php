<html>

<head>

    <title>Logical</title>

</head>

<body>

   
    
<?php
    
    $a = 5;
    $b = 6;
    
    if($a < $b){
        echo "a is less than b";
    }
    
    elseif($a == $b){
        echo "a is equal to b";
    }
    
    else{
        echo "a is greater than b";
    }
    
    echo "<br />"
    
    ?>
    
    <?php
    $c = 1;
    $d = 20;
    
    if(($a > $b) || ($c > $d)){
        echo "a is larger than b AND"; echo "<br />"; 
        echo "c is larger than d";
    }
    
    
    ?>
    <br />
    
    <?php 
    if(!isset($a)) {
        $a = 100;
    }
    echo $a;
    ?>
    <br />
    
    <?php
    if(is_int ($a)) {
        settype($a, "string");
    }
    
    echo gettype($a);
    ?>
    

      
    
    




</body>




</html>
