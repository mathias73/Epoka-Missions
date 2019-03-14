<?php
session_start();
$erreur = "";
try{
    $bdd= new PDO ('mysql:host=localhost;dbname=epoka_e4', 'root', '');
}
catch(Exception $e){
    die("Erreur :" . $e->getMessage());
}


    $num = $_POST['no'];
    $mdp = $_POST['mdp'];

    if(!empty($num) AND !empty($mdp)){
        $reqpers = $bdd->prepare("SELECT * FROM personnel WHERE pers_Id = ? AND pers_Mdp = ?");
        $reqpers->execute(array($num, $mdp));
        $persexist = $reqpers->rowCount();

        if($persexist == 1){
            
            $persinfo= $reqpers->fetch();
            $_SESSION['no'] = $persinfo[0];
            header ('Location: http://localhost/epoka/missions.php?no='.$_SESSION['no']);
        } else {
            $erreur = "Mauvais numero ou mot de passe";
        }
    }else {
        $erreur = "Tous les champs doivent être complétés";
    }
    echo $erreur;

?>