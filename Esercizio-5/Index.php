<!-- Array associativo
- Crea un array associativo con le informazioni di una persona (`nome`, `età`, `città`).  
- Stampa queste informazioni in una frase.   -->


<?php
    $persona= [
        "nome" => "Daniele",
        "età" => 38,
        "città" => "Napoli"
    ];

    echo "Mi chiamo $persona[nome], ho $persona[età], vivo a $persona[città]";
?>