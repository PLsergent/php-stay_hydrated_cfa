<?php

include "../Model/User.php";
include "../Model/UserManager.php";
include "../Model/Connexion.php";

$con = new Connexion;
$db = $con->getDb();
$userMng = new UserManager($db);

$user = new User;

if(!empty($_POST)) {
    echo "<h2>Formulaire soumis!!</h2>";
    $userMng->create($user);

    echo $user->getLastName();
}
