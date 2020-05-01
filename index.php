


<?php
require 'models/connexion.php';
require 'models/fonctions.php';



if(isset($_GET["action"]) && $_GET["action"]=="save") {
    if(isset($_GET["id"]) &&  $_GET["id"]!=null) {
        requeteModifications($db, $_GET["nom"], $_GET["prenom"], $_GET["id"]);
    } else {
        requeteAjout($db, $_GET["nom"], $_GET["prenom"]);
    }
}


if(isset($_GET["action"]) && ($_GET["action"]=="ajouter" || $_GET["action"]=="modifier")) {
    $nom = "";
    $prenom = "";
    $id = "";
    if($_GET["action"]=="modifier") {
        $reponse = selectUser($db, $_GET["id"]);

        while($user = $reponse->fetch()){
            $nom = $user["nom"];
            $prenom = $user["prenom"];
            $id = $user["id"];
        }
    }

    $target = 'views/user/edit.php';
    include 'views/default.php';
    ?>


<?php
} else {
$reponse = selectAllUsers($db);
$target = 'views/user/list.php';
include 'views/default.php';

?>



<?php
} 	?>


