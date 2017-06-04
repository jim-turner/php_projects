<html>

<head>

    <title>Booleans</title>

</head>

<body>

   
    
 <?php 
    $bool1 = true;
    $bool2 = false;
    
    ?>
    
    $bool1: <?php echo $bool1; ?>
    <br />
    $bool2: <?php echo $bool2; ?>
    <br />
    
    <?php
    
        $var1 = 3;
        $var2 = "cat";
    
    ?>
    
    Is var1 value set? : <?php echo isset($var1); ?><br />
    Is var2 value set? : <?php echo isset($var2); ?><br />
    Is var3 value set? : <?php echo isset($var3); ?><br />
    
    <?php unset($var1); ?>
    
    Is var1 value set? : <?php echo isset($var1); ?><br />
    Is var2 value set? : <?php echo isset($var2); ?><br />
    Is var3 value set? : <?php echo isset($var3); ?><br />
    
   Is var1 empty? : <?php echo empty($var1); ?><br />

      
    
    




</body>




</html>
