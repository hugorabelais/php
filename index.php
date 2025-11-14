<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width ", initial-scale=1.0">
    <title>formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <form action="multi.php" method="get" >
    entrez votre nombre
    <input type="text" name="nombre" required class="form-control"> 
    <input type="submit" value="envoyer" class="form-control">

    </form>
    <div>
        <?php
        
        if(isset($_GET['nombre'])){
            $val=$_GET['nombre'];
            echo "<table class= table>";
            for ($x = 0; $x <= 10; $x++) {
            
            echo "<tr><td>" . $x . "</td><td>" . " * " . "</td><td>" . $val . "</td><td>" . "=" . "</td><td>" . $x*$val ."</td></tr>";
            } 

            echo "</table>"; }
        ?>
    </div>
</body>
</html>