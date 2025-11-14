<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichezsql</title>
</head>
<body>
    <?php
require_once('connexion.php');
$stmt = $connexion->prepare("SELECT * FROM utilisateur");
$stmt->setFetchMode(PDO::FETCH_OBJ);
// Les résultats retournés par la requête seront traités en 'mode' objet
$stmt->execute();
// Parcours des enregistrements retournés par la requête : premier, deuxième…
while($enregistrement = $stmt->fetch())
{
  // Affichage des champs nom et prenom de la table 'utilisateur'
  echo '<h1>', $enregistrement->nom, ' ', $enregistrement->prenom,' ', $enregistrement->mot_de_passe,'</h1>';
}
?>
</body>
</html>