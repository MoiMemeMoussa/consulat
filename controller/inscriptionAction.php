<?php
if (isset($_POST['save'])) {
    $prenom = $_POST['PRENOM'];
    $nom = $_POST['NOM'];
    $datenaissance = $_POST['DATENAISSANCE'];
    $lieunaissance = $_POST['LIEUNAISSANCE'];
    $email = $_POST['EMAIL'];
    $password = $_POST['MOTDEPASSE'];
    $piece = $_POST['PIECES'];
    include("../models/Db.php");
    $database = new Db();

} else {
    header("Location:../index.php");
}
?>