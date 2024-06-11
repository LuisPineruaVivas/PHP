<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
//Indicar que queremos recibir el resultado de la peticion y no mostrala en pantalla

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la peticon y guardar el resultado */
$result = curl_exec($ch);

//Una alternatica seria utilizar file_get_contents
// $result = file_get_contents(API_URL); //Si solo quieres hacer Get de una API

$data = json_decode($result, true);
curl_close($ch);

?>

<head>
    <title>La proxima pelicula de marvel</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>

<main>
    <div class="content">
        <section style="text-align: center;">
            <h1>La proxima pelicula de marvel es</h1>
            <img src="<?= $data["poster_url"];?>" width="300" style="border-radius: 16px; text-align=center;" alt="Poster de">
            <hgroup>
                <h4><?= $data["title"] ?> Se estrena en <?= $data["days_until"]; ?> dias</h2>
                <p>Fecha de estreno: <?= $data["release_date"] ?> </p>
            </hgroup>
        </section>

        <section style="text-align: center;">
            <h1>La siguiente es:</h1>
            <img src="<?= $data["following_production"]["poster_url"];?>" width="300" style="border-radius: 16px;" alt="Poster de">
            <hgroup>
                <h4><?= $data["following_production"]["title"] ?> Se estrena en <?= $data["following_production"]["days_until"]; ?> dias</h2>
                <p>Fecha de estreno: <?= $data["following_production"]["release_date"] ?> </p>
            </hgroup>
        </section>
    </div>
    


</main>


<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
    }
    
    .content{
        justify-content: space-between;
    }
</style>