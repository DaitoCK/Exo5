<?php

$connect = new PDO('mysql:host=localhost;dbname=villesfrance', 'root', '');

$pdoStat = $connect->query ("SELECT departement_nom, ville_departement, COUNT(*)AS nbr_items FROM villes_france_free LEFT JOIN departement ON departement_code = ville_departement GROUP BY ville_departement ORDER BY nbr_items DESC");


//Récupération du tableau//


while ($donnees = $pdoStat->fetch())
{
    echo $donnees["ville_departement"];
echo  $donnees["departement_nom"];
echo  '<p>'.$donnees['nbr_items'].'</p>';
}

?>