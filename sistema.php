<?php

session_start();
//print_r($_SESSION);

if ((!isset($_SESSION['email']) ==true) and (!isset($_SESSION ['senha']) ==true))

{
    unset ($_SESSION ['email']);
    unset ($_SESSION ['senha']);
    header('Location: login.php');
}
    $logado = $_SESSION['email'];


?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sistema.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Sistema no Vitao</title>
</head>
<body>

<nav class="navbar" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
    
<?php
    echo "<h1> Welcome <u> $logado </u> </h1>";

?>

<div class="d-flex">
    <a href="sair.php" class="btn btn-danger me-5"> Sair</a>

</div>




</nav>


</body>
</html>
