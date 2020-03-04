<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .dediv{
        height: 50px;
        width: 50px;
        background-color: black;
        display: inline-block;
        margin: -5px;
    }
    </style>
</head>
<body>
<?php
$nummer = 8;
for($i = 1; $i <= $nummer; $i++){
    for ($x = 1; $x <= $i; $x++) {
        echo "<div class=\"dediv\"></div>";
    }
    echo "<br>";
}
?>
</body>
</html>