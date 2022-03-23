<?php
include("../functions.php");
$request = isset($_POST)?$_POST:null;
$_SESSION["cap2"]=$request;
if($request){
    if($request["cefaci"]==="accepti"){
        $_SESSION["cap2"]["damage"]=damage(-17);
    }
    if($request["cefaci"]==="refuzi"){

        $_SESSION["cap2"]["damage"]=damage(0);
    }
    if($request["cefaci"]==="injuri"){
        $_SESSION["cap2"]["damage"]=damage(35);
    }
    finish("../cap3");
}

?>
<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap1"]["cefaci"] . $_SESSION["cap1"]["damage"]?> </h4>
<h1>Ti-a iesit in cale o albina! Ea te roaga sa ii dai nectarul tau la schimb pentru 17 hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <form action= "" method= "POST">
                <label for="cefaci">Ce faci? </label>
                <select name="cefaci" id="cefaci" class="form-control">
                    <option value="accepti">accepti</option>
                    <option value="refuzi">refuzi</option>
                    <option value="injuri">injuri</option>
                </select>
                <button class="btn btn-info mt-3" type="submit">Actioneaza!</button>
            </form>
            </div>
            <div class="col">
            <img class="img img-responsive" src="images/bee.jpg" alt="Albina">
            </div>
        </div>
    <?php include("../templates/footer.php")?>