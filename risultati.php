<?php
  session_start();
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
    <?php
      $somma = 0;
      if (!isset($_SESSION['data'])) {
        echo "<p>nessuna recensione presente</p>";
        exit();
      }
    ?>
    <div>
      <table class="table w-50 text-center">
        <thead>
          <tr>
            <th scope="col">data recensione</th>
            <th scope="col">numero recensioni</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $_SESSION['data']?></td>
            <td><?php echo $_SESSION['accessi']?></td>
          </tr>
        </tbody>
      </table><br>
      <p>Lista Voti: </p>
      <ul>
        <?php
          foreach ($_SESSION['voti'] as $voto){
            echo "<li>$voto</li>";
            $somma += $voto;
          }
        ?>  
      </ul>
      <p>Media dei Voti: <?php echo round($somma / count($_SESSION['voti']), 2)?></p>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>