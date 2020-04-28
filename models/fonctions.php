<?php

function requeteModifications($db) {
    $reponse = $db->prepare("update users set nom = '".$_GET["nom"]."', prenom = '".$_GET["prenom"]."' where id='".$_GET["id"]."'");
    $reponse->execute();
}
function requeteAjout($db) {
    $reponse = $db->prepare("insert into users (nom,prenom) values ('".$_GET["nom"]."', '".$_GET["prenom"]."')");
    $reponse->execute();
}

