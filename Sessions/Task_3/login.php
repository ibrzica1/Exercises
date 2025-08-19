<?php
if(session_status() == PHP_SESSION_NONE)
{
  session_start();
}

if(isset($_SESSION['broj_posjeta']))
{
  $_SESSION['broj_posjeta']++;
}
else
{
  $_SESSION['broj_posjeta'] = 1;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Broj posjeta <?=$_SESSION['broj_posjeta']?></p>

<?php if(isset($_SESSION['ime'])): ?>
  <h3>Dobrodosao <?=$_SESSION['ime']?></h3>
  <a href="prekiniSesiju.php">Obrisi sesiju</a>
<?php else: ?>
  <form action="checkLogin.php" method="post">
    <input type="text" name="ime" placeholder="ime">
    <input type="text" name="lozinka" placeholder="lozinka">
    <button>Login</button>
  </form>
<?php endif; ?>
  
</body>
</html>