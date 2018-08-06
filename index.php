<?php

    $variable = "lalala";
    $x = 5;
    $y = 6;
    $mas = array (1,"potato",45,true);

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Hello World!</h1>


<?php

    echo "banana <br>";
    echo $variable." ".($x+$y);
    echo "<br>";
    print json_encode($mas);
?>
</body>
</html>