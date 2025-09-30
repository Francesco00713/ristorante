<?php
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $piatto = isset($_POST["piatto"]) ? $_POST["piatto"] : "";
    $allergie = isset($_POST["allergie"]) ? $_POST["allergie"] : "";
    $ip = $_SERVER["REMOTE_ADDR"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ristorante</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>RISTORANTE:</h1>
        <h2>Grande Piramide d'Egitto</h2>
        <p>
            Prima di sederti a tavola, ricordati di compilare il seguente modulo.
        </p>
        <label for="nome">Nome: </label>
        <input type="text" name="nome">
        <br>
        <label for="piatto">Piatto preferito: </label>
        <input type="text" name="piatto">
        <br>
        <input value="glutine" type="checkbox" name="allergie[]">
        <label for="allergie">Glutine</label>
        <br>
        <input value="lattosio" type="checkbox" name="allergie[]">
        <label for="allergie">Lattosio</label>
        <br>
        <input value="frutta secca" type="checkbox" name="allergie[]">
        <label for="allergie">Frutta secca</label>
        <br>
        <input value="crostacei" type="checkbox" name="allergie[]">
        <label for="allergie">Crostacei</label>
        <br><br>
        <input type="submit">
    </form>
    <br><br><br>
    <div>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if($nome == "") {
                    echo"Salve, mi segua da questa parte.";
                    echo "<br>";
                } else{
                    echo "Buonasera " . "<strong>$nome</strong>" . ", le ho riservato il tavolo migliore del locale!";
                    echo "<br>";
                }
                if($piatto == ""){
                    echo"Le porto subito la specialità dello chef!";
                    echo "<br>";
                } else{
                    echo"<strong>$piatto</strong>" . " è una scelta eccellente!";
                    echo "<br>";
                }
                if($allergie == ""){
                    echo "Perfetto, non ha segnalato alcuna allergia.";
                    echo "<br>";
                } else{
                    echo "Lista allergie: ";
                    foreach($allergie as $allergia){
                        echo "<strong>$allergia</strong> ";
                    }
                    echo "<br>";
                }
                echo "Curiosità: La sua richiesta ci è arrivata dall'indirizzo <strong>$ip</strong>.";
            }
        ?>
    </div>
</body>
</html>