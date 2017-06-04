<html>

<head>

    <title>Arrays</title>

</head>

<body>

   
    
 <?php $array1 = array(4,8,15,16,23,42);?>
    <?php echo $array1[0];?>
    <br />
    <?php $array2 = array(6, "fox", "dog", array("x", "y", "z")); ?>
    <?php echo $array2[3][1];?>
    <br />
    <?php $array2[3] = "cat";?>
    <?php echo $array2[3];?>
    <br />
    <?php $array3 = array("first_name" => "Jim", "last_name" => "Turner"); ?>
    <?php echo $array3["first_name"] . " " . $array3["last_name"] ; ?>
    <br />
    <?php $array3["first_name"] = "Larry"; ?>
    <?php echo $array3["first_name"] . " " . $array3["last_name"] ; ?>
    
    <br />
    
    <pre><?php print_r($array1); ?></pre>
    <pre><?php print_r($array2); ?></pre>
    <pre><?php print_r($array3); ?></pre>
    
   

      
    
    




</body>




</html>
