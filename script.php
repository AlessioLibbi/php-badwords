<?php //PRENDO I DATI 
$testo = $_GET["testo"];
$filtro = $_GET["filtro"];
$filtred = "***";
// FILTRO
$filtred_text = str_replace("$filtro", "$filtred", "$testo")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: black;">
    <div style="color: white;">
        <p>
            <?php echo $testo; ?>
        </p>
        <p>
            <?php echo "La lunghezza del tuo testo è di " . strlen($testo) . " caratteri"; ?>
        </p>
    </div>
    <div style="color: red;">
        <p>
            <?php echo $filtred_text; ?>
        </p>
        <p>
            <?php echo "La lunghezza del tuo testo è di " . strlen($filtred_text) . " caratteri";     ?>
        </p>
    </div>

</body>

</html>