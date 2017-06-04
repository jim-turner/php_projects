<html>

<head>

    <title>String Functions</title>

</head>

<body>

    <?php
    
    $firstString = "the quick brown fox";
    $secondString = "jumped over the lazy dog";
    
    echo "$firstString" . "$secondString";
    
    ?>

        <?php
    echo "<br />";
    $thirdString = $firstString;
    $thirdString .= $secondString;
    echo $thirdString;
    echo "<br />";
    echo "<br />";
    ?>

            <?php
    echo "<br />";
    ?>

                Lowercase:
                <?php echo strtolower($thirdString); ?> <br /> Uppercase:
                <?php echo strtoupper($thirdString); ?>
                <br /> Uppercase first-letter:
                <?php echo ucfirst($thirdString); ?> <br /> Uppercase words:
                <?php echo ucwords($thirdString);    ?> <br />
                <?php echo strchr($thirdString, "x"); ?>


</body>




</html>
