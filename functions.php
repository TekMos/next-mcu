<?php

//Deshabilita la transformación automática de variables de PHP
declare(strict_types=1);

function render_template(string $template, array $data = []) {
    extract($data);
    require "templates/$template.php";
}

function get_data(string $url): array {
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string {
    return match(true) {
        $days == 0 => "¡Hoy se estrena! 🥳",
        $days == 1 => "El estreno es mañana 🚀",
        $days < 7  => "Se estrena esta semana ⌛",
        $days < 30 => "Este mes se estrena 📆",
        default => "$days días hasta el estreno 📅",
    };
}
