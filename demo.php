<?php
$name = "Israel";
$isDev = true;
$age = 24;

$output = "Hola \"$name\"";
$output .= ", tu edad es $age 👍";

define("url_php", "https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png");

const apellido = "Moscol";
/*
Permiten imprimir el tipo de variable
echo is_string($name);
echo gettype($age);
var_dump($isDev);
*/

$isOld = $age > 40;

/*
$outputAge = $isOld ? "Eres viejo" : "Eres joven";
Este es un ternario
*/
$outputAge = match (true) {
    $age < 3 => "Eres un bebé, $name",
    $age < 11 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age == 18 => "Eres mayor de edad, $name",
    $age < 30 => "Eres joven, $name",
    $age < 40 => "Eres un adulto, $name",
    default => "Hueles más a madera que a fruta $name"
};

$bestLanguages = ["Java", 24, 25, "Python", "JavaScript"];
$bestLanguages[3] = "Ruby";
$bestLanguages[] = "Dart";

/* Estructura if, completamente dentro de php. Debajo hay una versión más eficiente.
if($isOld) {
    echo "<h2>Eres viejo, que triste 😔</h2>";
} else if($isDev) {
    echo "<h2>Eres desarrollador. Pobrecito 🥺</h2>";
} else {
    echo "<h2>Eres joven, que alegría 🤑</h2>";
}*/
?>

<ul>
    <?php foreach ($bestLanguages as $key => $language): ?>
        <li><?= $key." ".$language ?></li>
    <?php endforeach; ?>
</ul>

<?php if ($isOld): ?>
    <h2>Eres viejo, que triste 😔</h2>
<?php elseif ($isDev): ?>
    <h2>Eres desarrollador, pobrecito 🥺</h2>
<?php else: ?>
    <h2>Eres joven, que alegría 🤑</h2>
<?php endif; ?>

<img src="<?= url_php ?>" alt="El logo de PHP" height="200px">
<h1>
    <?= $output; ?>
    <?= $outputAge ?>
</h1>

<style>
    :root {
        color-scheme: dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>