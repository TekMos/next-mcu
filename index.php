<?php
const api_url = "https://whenisthenextmcufilm.com/api";
#Iniciar una nueva sesión de CURL, ch = cURL handle
$ch = curl_init(api_url);
//Indicar que queremos recibir el resultado y no mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Ejecutar la petición y guardamos los resultados
$result = curl_exec($ch);
$data = json_decode($result, true);

//Una alternativa sería usar file_get_contents
//$result = file_get_contents(api_url);
//SOLO PARA GET DE UNA API

curl_close($ch);
?>

<head>
    <title>Próxima película de Marvel</title>
    <meta charset="UTF-8" />
    <meta name="description" content="La próxima película de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<header>
    <h2>¿Cuándo es la próxima película de Marvel?</h2>
</header>
<div class="separator"></div>
<main>
    <!--<pre><?= var_dump($data) ?></pre>-->
    <section>
        <img src="<?= $data["poster_url"] ?>" width="250" alt="Póster de la película <?= $data["title"] ?>">
    </section>

    <hgroup>
        <h3><?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> días.</h3>
        <p>Fecha de estreno: <?= $data["release_date"] ?></p>
        <p>Siguiente producción: <?= $data["following_production"]["title"] ?>
        <br>Fecha de estreno: <?= $data["following_production"]["release_date"] ?></p>
    </hgroup>
</main>

<footer>
    <p>Inspired by Diljot Garcha's site: <a href="https://whenisthenextmcufilm.com/">"When is the next MCU Film"</a></p>    
    <p>Made with 🤎 by <a href="https://github.com/TekMos">Israel Diaz</a></p>
</footer>

<style>
    :root {
        color-scheme: light dark;
    }
    body {
        display: grid;
        place-content: center;
        grid-template-areas: 
        "header"
        "main"
        "footer";
        align-content: space-between;
    }
    header {
        margin-top: 10px;
    }
    .separator {
        width: 100%;
        border: .5px solid #ccc;
    }
    section {
        display: flex;
        justify-content: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
    pre {
        font-size: 14px;
        overflow: scroll;
        max-height: 250px;
    }
    img {
        border-radius: 8px;
    }
    footer {
        font-size: 14px;
    }
</style>