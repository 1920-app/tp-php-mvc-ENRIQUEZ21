<?php

function requeteModifications($db, $nom, $prenom, $id) {
    $reponse = $db->prepare("update users set nom = '$nom', prenom = '$prenom' where id='$id'");
    $reponse->execute();
    return $reponse;
}
function requeteAjout($db, $nom, $prenom) {
    $reponse = $db->prepare("insert into users (nom,prenom) values ('$nom', '$prenom')");
    $reponse->execute();
    return $reponse;
}
function selectUser($db, $id) {
    $reponse = $db -> prepare("SELECT * FROM users WHERE id= '$id'");
    $reponse -> execute();
    return $reponse;
}
function selectAllUsers($db) {
    $reponse = $db -> prepare("SELECT * FROM users");
    $reponse->execute();
    return $reponse;
}

