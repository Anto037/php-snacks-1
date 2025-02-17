<!-- Uso di PHP dentro HTML
- Crea una pagina HTML con un titolo `<h1>` che contiene un messaggio generato da PHP.   -->

<?php

$persona = "Bernardo";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 6</title>
</head>
<body>
    <h1>Ciao ragazzi sono <?php echo $persona;?> </h1> 
</body>
</html>