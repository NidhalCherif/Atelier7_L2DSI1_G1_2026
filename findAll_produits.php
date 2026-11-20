<?php
// 1 connexion à la bd
require_once "config.php";
$obj = new config();
$pdo = $obj->getConnexion(); // objet de la classe PDO
// 2 Formuler la requete
$sql = "select * from produits";
//3 envoi de la requete
$res = $pdo->query($sql); // le type de $res est PDOStatement

$LesProduits = $res->fetchAll(PDO::FETCH_NUM); //tableau resultat numérique

// Affichage de données
?>
<table border=1>
    <tr>
        <th>Identifiant</th>
        <th>Libellé</th>
        <th>Prix</th>
        <th>Date d'ajout</th>
    </tr>

    <?php
    foreach ($LesProduits as $produit) {
    ?>
        <tr>
            <td><?= $produit[0] ?></td>
            <td><?= $produit[1] ?></td>
            <td><?= $produit[2] ?></td>
            <td><?= $produit[4] ?></td>
        </tr>

    <?php
    }
    ?>




</table>