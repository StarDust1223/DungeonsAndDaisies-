<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
if($request){
    header("Location: ../index");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ai murit :(</h1>
    <h3>Vrei sa incerci din nou?</h3>
    <a href="../index.php" rel="noopener noreferrer">Incearca din nou</a>
</body>
</html>