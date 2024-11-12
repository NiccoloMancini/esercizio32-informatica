<?php
    session_start();
    if (isset($_SESSION["accessi"])) {
        $_SESSION['accessi'] += 1;
    } else {
        $_SESSION['accessi'] = 1;
    }

    $_SESSION['data'] = $_POST['dataRecensione'];

    if (!isset($_SESSION['voti'])) {
        $_SESSION['voti'] = array();
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="text-center">
        <?php
            array_push($_SESSION['voti'], $_POST['voto']);
            echo "<p>data recensione: " . $_POST['dataRecensione'] . "</p>";
            echo "<p>voto: ". $_POST['voto'] . "</p>";
            echo "<p>numero accessi: ". $_SESSION['accessi']. "</p>";
        ?>
        <a href="presentazione.html" class="text-center">pagina iniziale</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>