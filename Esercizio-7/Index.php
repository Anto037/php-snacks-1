<!--  Inserire variabili PHP dentro HTML
- Crea tre variabili PHP (`$titolo`, `$sottotitolo`, `$descrizione`).  
- Stampa questi valori all’interno di una pagina HTML nei rispettivi tag (`<h1>`, `<h2>`, `<p>`).   -->

<?php
    $titolo = "Titanic";
    $sottotitolo ="Nel largo dei mari più profondi";
    $descrizione = "Un lungo viaggio nel mare"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Il titolo del film è: <?php echo $titolo;?> </h1>
    <h2> Il sottotitolo è: <?php echo $sottotitolo;?> </h2>
    <p> La descrizione è: <?php echo $descrizione;?> </p>
    
</body>
</html>