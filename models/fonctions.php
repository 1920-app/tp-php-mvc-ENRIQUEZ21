<?php

function selectUsers($db) {
    $reponse = $db->prepare("select * from users ");
    $reponse->execute();
    return $reponse;
}
