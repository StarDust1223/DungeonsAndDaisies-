<?php
session_start();

$_SESSION["hp"]=100;
$request = isset($_POST)?$_POST:null;
$_SESSION["user"]= $request;

var_dump ($_SESSION["user"]);
if($_SESSION["user"]){
    header("Location: cap1");
}

include("templates/header.php");
?>



    <form action= "" method= "POST">
    <label for="username">Numele tau: </label>
    <input type="text" name="username" id="username" />
    <label for="rasa">Rasa ta: </label>
    <select name="rasa" id="rasa">
        <option value="margareta">Margareta</option>
        <option value="trandafir">Trandafir</option>
        <option value="zambila">Zambila</option>
    </select>
    <button type="submit">Incepe aventura!</button>
    </form>
    <img src="images/zambila.jpg" alt="Zambila">
<?php include("templates/footer.php");?>