<html>

<head>

    <title>SecondPage</title>

</head>

<body>

   
    
<a href="firstpage.php">First Page</a>
 <?php
    print_r($_GET);
    $id = $_GET["id"];
    $name = $_GET["name"];
    echo $id;
    ;echo $name;
    
    ?>
    
    <br />
    
    <?php
    
    $string = "Jim Turner";
    echo urlencode($string);
    echo "<br />";
    echo rawurlencode($string);
    
    ?>
    


</body>




</html>
