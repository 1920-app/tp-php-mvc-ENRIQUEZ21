<?php


$nom = "";
$prenom = "";
$id = "";
if($_GET["action"]=="modifier") {
    $reponse = $db->prepare("select * from users where id=".$_GET["id"]);
    $reponse->execute();

    while($user = $reponse->fetch()){
        $nom = $user["nom"];
        $prenom = $user["prenom"];
        $id = $user["id"];
    }
}


?>

<form action="index.php" method="get">
    Nom : <input type="text" name="nom" value="<?php echo $nom; ?>"/>
    Prenom : <input type="text" name="prenom" value="<?php echo $prenom; ?>"/>
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <input type="hidden" name="action" value="save"/>
    <input type="submit"/>
</form>
