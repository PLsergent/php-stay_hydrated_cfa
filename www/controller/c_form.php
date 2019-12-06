<?php

include "../Model/User.php";
include "../Model/UserManager.php";
include "../Model/Connexion.php";

$con = new Connexion;
$db = $con->getDb();
$userMng = new UserManager($db);

if(!empty($_POST)) {
    $user = new User($_POST);
    echo "<h2>Formulaire soumis!!</h2>";
    $userMng->create($user);

    echo $user->getLastName();
}
