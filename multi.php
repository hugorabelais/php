<!DOCTYPE html>
<html lang="fr">
<head>
  <title>first php</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="petitcss.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <p class= jolie>hello word</p>
    </div>
    <div>
        <?php
        $val=$_GET['nombre'];
        echo "<table class= table>";
        for ($x = 0; $x <= 10; $x++) {
        
        echo "<tr><td>" . $x . "</td><td>" . " * " . "</td><td>" . $val . "</td><td>" . "=" . "</td><td>" . $x*$val ."</td></tr>";
        } 

        echo "</table>";
        ?>
    </div>
</body>
</html>           