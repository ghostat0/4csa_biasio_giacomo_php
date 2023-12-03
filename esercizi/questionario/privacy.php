<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">




<div class="container min-vh-100 d-flex justify-content-center align-items-center">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $password_inserita = $_POST["pass"];
  $password_corretta = "info2023";

  if ($password_inserita === $password_corretta) {?>
  <div class="container min-vh-100 d-flex justify-content-center align-items-center">
  <h1>Password CORRETTA!Ecco i dati:</h1>
</div> 
    <h3>
    <div> 
        <div class="row"> 
            <div class="col">
            <?php
            echo "NOME:";
            ?>
            </div>
        <div class="col">
        <?php
            echo $_POST["fname"];
            ?>
        </div>
        <div class="row"> 
            <div class="col">
            <?php
            echo "COGNOME:";
            ?>
            </div>
        <div class="col">
        <?php
             echo $_POST["lname"];
             ?>
        </div>
        <div class="row"> 
            <div class="col">
            <?php
            echo "ANNI:";
            ?>
            </div>
            
        <div class="col">
        <?php
             echo $_POST["age"];
             ?>
        </div>
        <div class="row"> 
            <div class="col">
            <?php
            echo "SPORT:";
            ?>
            </div>
            
        <div class="col">
        <?php
             echo $_POST["sport"];
             ?>
        </div>
        <?php
    } else {
    echo "Password ERRATA. Riprova.";
    ?>
    <a href="index.html"><button type="submit" class="btn btn-primary">CLICCAMI</button>   <?php
  }
}
?>
</div>
</div> 
</h3>
