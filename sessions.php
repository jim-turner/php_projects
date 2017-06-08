<?php
session_start();
?>


<html>

<head>

    <title>Sessions</title>

</head>

<body>
    <?php
    $_SESSION['name']= "Jim";
    ?>
    
    <?php
    $name = $_SESSION['name'];
    echo $name;
    ?>
    
</body>




</html>
