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

    <div class="row">
        <div class="col">
        <div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <form action= "" method= "POST">
            <label for="username">Numele tau: </label>
            <input type="text" name="username" id="username" class="form-control" />
            <label for="rasa">Rasa ta: </label>
            <select name="rasa" id="rasa" class="form-control">
                <option value="margareta">Margareta</option>
                <option value="trandafir">Trandafir</option>
                <option value="zambila">Zambila</option>
            </select>
            <button class="btn btn-info" type="submit">Incepe aventura!</button>
            </form>

        </div>
        <div class="col">
            <img class="img img-responsive" src="images/zambila.jpg" alt="Zambila">

        </div>
    </div>


<?php include("templates/footer.php");?>