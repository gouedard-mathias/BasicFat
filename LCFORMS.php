<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header('Location: index.php');
}


$errors = [];
$errorsQueryString = http_build_query($errors);
/*$postQueryString = http_build_query($_POST);*/




if (count($errors)=== 0){
    header('Location: success.php');
} else{
    header('Location: index.php?'. $errorsQueryString); /* Penser au '?' après le fichier index.php sinon erreur */
}




/* AJOUTER DANS index.php au début pour tester
<?php
var_dump($_GET);

?>
*/