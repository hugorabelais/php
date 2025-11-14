<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des agents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php
    require_once('connexion.php');
    $stmt = $connexion->prepare("SELECT * FROM agent");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    // Les résultats retournés par la requête seront traités en 'mode' objet
    $stmt->execute();
    // Parcours des enregistrements retournés par la requête : premier, deuxième…
    while($enregistrement = $stmt->fetch())
    {
    // Affichage des champs nom et prenom de la table 'utilisateur'
    echo '<h3>', $enregistrement->civilite, ' ', $enregistrement->prenom,' ', $enregistrement->nom," ",$enregistrement->ville,' ','</h3>';
    }
    ?>
</body>
</html>






