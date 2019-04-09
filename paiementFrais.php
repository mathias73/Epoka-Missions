<?php
session_start();
try{
    $bdd= new PDO ('mysql:host=localhost;dbname=epoka_e4', 'root', '');
}
catch(Exception $e){
    die("Erreur :" . $e->getMessage());
}

$req = $bdd->query('SELECT  mis_id, pers_nom, pers_prenom, mis_dateDeb, mis_dateFin, Vil_Nom, mis_rembourser 
                                              FROM personnel, mission, ville
                                              WHERE mis_PersoId = pers_id AND mis_VilleId = ville_Id');

$reqMontant = $bdd ->query( 'SELECT ((DATEDIFF(mis_dateFin, mis_dateDeb) + 1) * indemnite) as PrixJour,
                                            (ROUND(dist_km * remboursement, 2)) as PrixKm, 
                                            (((DATEDIFF(mis_dateFin, mis_DateDeb) + 1) * indemnite) + (ROUND(dist_km * remboursement, 2))) as PrixTotal 
                                    FROM mission, paiement, distance 
                                    WHERE dist_Villefin = mis_VilleId');


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epoka Missions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="deconnexion.php">Deconnexion</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="validMissions.php">Validation des missions</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="paiementFrais.php">Paiement des frais</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="parametrage.php">Parametrage</a>
            </li>
        </ul>
    </div>
</nav>
<?php
if(!isset($_SESSION['pers_responsable']) OR $_SESSION['pers_responsable'] == false){
    ?>
    <p class="refus">Accés refusé !</p>
<?php
}
elseif(isset($_SESSION['pers_responsable']) OR $_SESSION['pers_responsable'] == true){
?>
    <h2>Paiement des missions</h2>

<?php

echo '<table style="border: 1px solid; margin-left: 50px; text-align: center; ;">';
echo '<tr>';
echo '<td style="border: 1px solid">Nom</td><td style="border: 1px solid">Prenom</td><td style="border: 1px solid">Debut mission</td><td style="border: 1px solid">Fin mission</td><td style="border: 1px solid">Lieu Mission</td><td style="border: 1px solid">Montant</td><td style="border: 1px solid">Paiement</td>';
echo '</tr>';
$montants = array();
foreach($reqMontant as $val){
    array_push($montants,$val['PrixTotal']);
}
$index =0;
while ($reponse = $req->fetch()) {
        echo '<tr>
         <td style="border: 1px solid">'
         .$reponse['pers_nom'].
         '</td>
         <td style="border: 1px solid">'
         .$reponse['pers_prenom'].
         '</td>
         <td style="border: 1px solid">'
         .$reponse['mis_dateDeb'].
         '</td>
         <td style="border: 1px solid">'
         .$reponse['mis_dateFin'].
         '</td>
         <td style="border: 1px solid">'
         .$reponse['Vil_Nom'].
         '</td >';
        if($montants[$index] == 0){
            echo '<td style="border: 1px solid"> parametrage /!\ </td>';
        }else {
            echo ' <td style="border: 1px solid">'
                . $montants[$index] . ' €' .
                '</td style="border: 1px solid" >';
        }
    if($reponse['mis_rembourser'] == 1){
        echo '<td style="border: 1px solid">Remboursée</td>';
    }else {
        echo '<td style="border: 1px solid"><a href="missRemboursement.php?id=' . $reponse['mis_id'] . '"><input type="button" value="Rembourser"> </a></td>';
    }
    echo '</tr>';
    $index++;
}
echo '<table>'
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <?php
}
?>
</body>
</html>