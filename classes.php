<?php

declare(strict_types=1);

class SuperHero {
    /*Aquí van las propiedades y los métodos
    public $name;
    public $powers;
    public $planet;*/

    /*Usaremos promoted properties, una funcionalidad especial de PHP8
    Esto permite declarar las variables públicas dentro del constructor*/

    public function __construct(
        private string $name,
        public array $powers,
        public string $planet
    ){ //Con promoted properties, la asignación ya no es necesaria
    }

    public function attack() {
        return "¡$this->name ataca con sus poderes!";
    }

    public function description() {
        $powers = implode(", ", $this->powers);
        return "¡$this->name es un super héroe del planeta $this->planet y tiene estos poderes: $powers!";
    }

    public static function random() {
        $names = ["Thor", "Wolverine", "Ironman", "Hulk"];
        $powers = [
            ["Superfuerza", "volar", "rayos láser"],
            ["Factor curativo", "garras de adamantio", "super sentidos"],
            ["Dinero", "inteligencia", "tecnología"],
            ["Superfuerza", "cambio de tamaño", "super resistencia"]
        ];
        $planets = ["Asgard", "Krypton", "Planet Hulk", "Tierra"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        return new self($name, $power, $planet);
    }
}

//Método estático
$hero = SuperHero::random();
echo $hero->description();
