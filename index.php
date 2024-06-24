<?php
const API_CURL="https://whenisthenextmcufilm.com/api";
#Inicizlizar una nueva sesion de curl handle
$ch=curl_init(API_CURL);
//INdiciar que queremos recibir el resulta de la peticion y no mostrarla en pantalla
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
/* Ejecutar la peticion y guardamos el resultado */
$result=curl_exec($ch);
$data = json_decode($result,true);
$picture = $data["poster_url"];
// echo $picture;
curl_close($ch);
;
/*
acordar una alternativa seria utilizar file_get_contents
//$result=file_get_contents(API_URL)
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>
</head>
<style>
:root{
    color-scheme: light dark;
}
body{
    display: grid;
    place-content: center;
   
}
main{
    display: flex;
    width: 100%;
    height: 100vh;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
img{
    border-radius: 5%;
}
hgroup{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
</style>
<main>
    <!-- <pre style="font-size: 10px; overflow:scroll; height: 300px;">
        <?= var_dump($data)?>
    </pre> -->
    <section>
<img src="<?= $picture?>" width="300" alt="poster de  <?=$data["title"];?>">
</section>
<hgroup>
    <h3><?=$data["title"];?> se estrena en <?=$data["days_until"]?> day</h3>
    <p>Fecha de estreno: <?= $data["release_date"];?></p>
    <p>La siguientes es: <?= $data["following_production"]["title"]?></p>
</hgroup>
</main>
</html>