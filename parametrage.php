<?php
session_start();
try{
    $bdd= new PDO ('mysql:host=localhost;dbname=epoka_e4', 'root', '');
}
catch(Exception $e){
    die("Erreur :" . $e->getMessage());
}

$requtf8 = $bdd->query("SET NAMES 'utf8'");
$req = $bdd->query('SELECT Vil_Nom, ville_id FROM ville ORDER BY Vil_Nom');
$reqVille=$bdd->query('SELECT v1.Vil_Nom AS villeA, v2.Vil_Nom AS villeB, dist_km FROM distance INNER JOIN ville AS v1 ON dist_Villedeb = v1.ville_id INNER JOIN ville AS v2 ON dist_Villefin = v2.ville_id ORDER BY dist_km');

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
<h2>Paramétrage de l'application</h2>
<h3>Montant du remboursement au km</h3><br>
<form name="montantRemboursementKm" method="post" action="formMontant.php">
    <label>Remboursement au Km : <input type="text" name="rembKm" id="rembKm"></label><br>
    <label>Indemnité d'hébergement : <input type="text" name="indHeb" id="indheb"></label><br>
    <input type="submit" placeholder="Valider">
</form><br>
<h2>Distance entre les villes</h2>
<form name="distanceVille" method="post" action="formParametrage.php">
    <?php
    $list ='';

    foreach($req as $row){
        $list.= '<option value="'.$row[1].'">' .$row[0].'</option>';
    }
    ?>
    <label>De : <select name="distance1"><?= $list;?> </select>
        à : <select name="distance2"><?=$list; ?></select> </label>
    <br>
    <label>Distance en Km : <input type="text" name="distKm"></label>
    <input type="submit" placeholder="Valider">
</form>
<br>
<h2>Distance entre villes déjà saisies</h2>
<?php

echo '<table style="border: 1px solid; margin-left: 50px;">';
echo '<tr>';
echo '<td style="border: 1px solid">Ville debut</td><td style="border: 1px solid">Ville Fin</td><td style="border: 1px solid">Distance</td>';
echo '</tr>';
while ($row = $reqVille->fetch()){
    echo '<tr>
<td style="border: 1px solid">'.$row['villeA'].'</td>
<td style="border: 1px solid">'.$row['villeB'].'</td>
<td style="border: 1px solid">'.$row['dist_km'].'</td>
</tr>';
}
echo '</table>'
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>