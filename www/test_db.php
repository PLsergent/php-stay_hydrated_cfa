<?php

include "Model/Connexion.php";

$db = new Connexion;

if($db) {
    echo "Connexion done!!\n";
}
echo "Host information: " . mysqli_get_host_info($db->getInfoDb()) . PHP_EOL;
