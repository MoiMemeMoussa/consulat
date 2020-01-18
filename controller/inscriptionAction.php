<?php
if (isset($_POST['save'])) {
    $prenom = $_POST['PRENOM'];
    $nom = $_POST['NOM'];
    $datenaissance = $_POST['DATENAISSANCE'];
    $lieunaissance = $_POST['LIEUNAISSANCE'];
    $email = $_POST['EMAIL'];
    $password = $_POST['MOTDEPASSE'];
    $piece = $_POST['PIECES'];

    echo "Prenom = " . $prenom . "<br>";
    echo "Nom =    " . $nom . "<br>";
    echo "Piece = " . $piece . "<br>";
    echo "email = " . $email . "<br>";
    echo "mot de passe  = " . $password . "<br>";
    echo "date de naissance  = " . $datenaissance . "<br>";
    echo "lieu de naissance   = " . $lieunaissance . "<br>";

} else {
    header("Location:../index.php");
}
?>