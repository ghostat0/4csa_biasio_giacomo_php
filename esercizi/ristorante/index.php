<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
  
  <body class="d-flex h-100 text-center text-bg-dark">
    

   

    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Ristorante di Biasio</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1 style="color: blue;">MENU' DEL GIORNO</h1>

    <h4 style="color: red;">ANTIPASTI</h4>
    
    <?php
$piatti = array("Antipasto misto pesce"=>"15", "Antipasto misto affettati"=>"20", "Cappasanta con polenta"=>"17" );
foreach($piatti as $a => $b)
{
    echo "Piatto: " . $a . ", Prezzo: " . $b . "$"; 
    echo "<br>";
}

?>
<br>
<h4 style="color: red;">PRIMI PIATTI</h4>
    <?php
$piatti = array("Spaghetti alle vongole"=>"15", "Spaghetti allo scoglio"=>"20", "Paccheri al granchio"=>"17", "Gnocchetti al tartufo"=>"25" );
foreach($piatti as $a => $b)
{
    echo "Piatto: " . $a . ", Prezzo: " . $b. "$"; ; 
    echo "<br>";
}

?>
<br>

<h4 style="color: red;">SECONDI PIATTI</h4>
    <?php
$piatti = array("Frittura mista"=>"15", "Bistecca di manzo ai ferri"=>"20", "Petto di pollo impanato"=>"17", "Tagliata di manzo"=>"25" );
foreach($piatti as $a => $b)
{
    echo "Piatto: " . $a . ", Prezzo: " . $b. "$"; 
    echo "<br>";
}

?>

      
    </p>
  </main>

  
    

</body>
    
  
    
        


</html>