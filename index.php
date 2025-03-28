<?php

require_once "const.php";
require_once "functions.php";
require_once "classes/NextMovie.php";

$next_movie = NextMovie::fetch_and_create_movie(api_url);
$next_movie_data = $next_movie -> get_data();

/*
Reemplazamos require por una función nueva. Y eliminamos la carpeta sections
para reemplazarla por templates.
require "sections/main.php";
require "sections/styles.php";
*/

render_template('head', ["title" => $next_movie_data["title"]]);
render_template('main', array_merge(
    $next_movie_data,
    ["untilMessage" => $next_movie -> get_until_message()]
));
render_template('styles');
