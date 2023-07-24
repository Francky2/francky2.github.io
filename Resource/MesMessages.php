<?php
include('connexion.php');

// Récupérer les données de la table "commentaire"
$sql = "SELECT * FROM commentaire";
$request = $con->prepare($sql);
$request->execute();
$commentaires = $request->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des données enregistrées</title>
</head>
<body>
    <h1>Données enregistrées</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Objet</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($commentaires as $commentaire) { ?>
                <tr>
                    <td><?php echo $commentaire['nom']; ?></td>
                    <td><?php echo $commentaire['email']; ?></td>
                    <td><?php echo $commentaire['objet']; ?></td>
                    <td><?php echo $commentaire['Messag']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
