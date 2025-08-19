<?php

if(session_status() == PHP_SESSION_NONE)
{
  session_start();
}

require_once "baza.php";

$_SESSION['cart'] = [];

$rezultat = $baza->query("SELECT * FROM proizvodi");
$proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);

$_SESSION['cart'] = $proizvodi;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php foreach ($_SESSION['cart'] as $proizvod): ?>
    <p><?=$proizvod['ime']?></p>
  <?php endforeach; ?>
</body>

</html>