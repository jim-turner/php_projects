<html>

<head>

    <title>FirstPage</title>

</head>

<body>
    
    
    <?php
    $linktext = "<Click> & you'll see";
    
    ?>
<a href="secondpage.php?name=<?php echo urlencode("Jim Turner"); ?>&id=41">
    <?php echo htmlspecialchars ($linktext); ?> </a>
   
</body>




</html>
