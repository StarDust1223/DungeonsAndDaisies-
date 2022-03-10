<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
if($request){
    session_destroy();
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
<?php var_dump ($_SESSION["user"]); ?>
    <h1>FELICITARI</h1>
    <h2>Ai ajuns la finalul aventurii tale, si ai obtinut Coroana Tuturor Florilor!</h2>
    <h3>Vrei sa joci din nou?</h3>

    <a href="../index.php" rel="noopener noreferrer">Incearca din nou</a>
</body>
</html>