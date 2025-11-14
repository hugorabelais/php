<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajout activité</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
    <form action="" method="post">
        nom : <input type="text" name="nom" >
        prenom : <input type="text" name="prenom" >
        adresse : <input type="text" name="adresse" >

        <input type="submit" name="ok" value="ajouter">

    </form>
    <?php
        if (isset($_POST["ok"])){
            $nom =$_POST["nom"];
            $prenom = $_POST["prenom"];
            $adresse = $_POST["adresse"];

            require_once ("connexion.php");
            $stmt= $connexion-> prepare ("INSERT INTO users(nom, prenom, adresse) values (:nom,:prenom, :adresse)") ;
            $stmt ->bindvalue(":nom",$nom, PDO:: PARAM_STR);
            $stmt ->bindvalue(":prenom",$prenom, PDO:: PARAM_STR);
            $stmt ->bindvalue(":adresse",$adresse, PDO:: PARAM_STR);

            $nbligne = $stmt -> execute();
            echo $nbligne="ligne inseré .<br>";
        }
        ?>
</body>
</html>