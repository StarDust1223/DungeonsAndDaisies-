<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
$_SESSION["cap5"]=$request;
if($request){
    //aici tratam formularul
    if($request["cefaci"]==="accepti"){
        $_SESSION["cap5"]["damage"]=damage(-35);
    }
    if($request["cefaci"]==="refuzi"){
        $_SESSION["cap5"]["damage"]=damage(0);
    }
    if($request["cefaci"]==="injuri"){
        $_SESSION["cap5"]["damage"]=damage(35);
    }
    finish("../final/bine.php");
    //header("Location: ../cap2");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scenariu 3</title>
</head>
<body>
<h4>Ai ales:<?php echo $_SESSION["cap4"]["cefaci"] . $_SESSION["cap4"]["damage"]?> </h4>
<h1>Un bondarel vrea sa traga un pui de somn in florile tale. Daca il lasi, acesta te va poleniza pentru +35 hp!</h1>
<form action= "" method= "POST">
    <label for="cefaci">Ce faci? </label>
    <select name="cefaci" id="cefaci">
        <option value="accepti">accepti</option>
        <option value="refuzi">refuzi</option>
        <option value="injuri">injuri</option>
    </select>
    <button type="submit">Actioneaza!</button>
    </form>
</body>
</html>