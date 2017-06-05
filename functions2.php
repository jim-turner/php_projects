<html>

<head>

    <title>functions 2</title>

</head>

<body>

   
    

    
    <?php 
    
    //using globals
    
    $bar = "outside";
    function foo(){
        $bar = "inside";
    }
    
    foo();
        echo $bar . "<br />";
    
    ?>
    
    <br />
    
    <?php 
    
    //using local variable, returns and arguments
    
    $bar = "outside";
    function foo2($var){
        $var = "inside";
        return $var;
    }
    
    
    $bar = foo2($bar);
    echo $bar;   
    "<br />";
    
    ?>
    
    <br />
    
    <?php
    
    function paint($room = "office", $color = "red"){
    echo "The color of the {$room} is {$color}";    
    }
    paint("bedroom", "blue");
    
    
    
    ?>
    
    
      
    
    




</body>




</html>
