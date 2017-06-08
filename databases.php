<?php

//1. Create a database connection

$connection = mysqli_connect("localhost", "root", "root", "widget_corp");
if(!$connection){
    die("Database connection failed:" . mysqli_error());
}


    

?>


<html>

<head>

    <title>Databases</title>

</head>

<body>
<?php
$result = mysqli_query($connection, "SELECT * FROM subjects" );
    if (!$result){
    die("Database query failed:" . mysql_error());
    }
    
    //results
    while($row = mysqli_fetch_array($result)){
        echo $row["menu_name"]. " " .$row["position"]."<br />";
    }
    ?>
</body>

</html>


<?php
//close connection

mysqli_close($connection);
    
    ?>
