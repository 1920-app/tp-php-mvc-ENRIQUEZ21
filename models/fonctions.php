<?php

function selectUsers($db) {
    $reponse = $db->prepare("select * from users ");
    return $reponse;
}
