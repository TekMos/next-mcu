<header>
    <h2>¿Cuándo es la próxima película de Marvel?</h2>
</header>
<div class="separator"></div>
<main>
    <section>
        <img src="<?= $poster_url ?>" width="250" alt="Póster de la película <?= $title ?>">
    </section>

    <hgroup>
        <h3><?= $data["title"] . " - " . $untilMessage ?></h3>
        <p>Fecha de estreno: <?= $release_date ?></p>
        <p>Siguiente producción: <?= $following_production["title"] ?>
        <br>Fecha de estreno: <?= $following_production["release_date"] ?></p>
    </hgroup>
</main>

<footer>
    <p>Inspired by Diljot Garcha's site: <a href="https://whenisthenextmcufilm.com/">"When is the next MCU Film"</a></p>    
    <p>Made with 🤎 by <a href="https://github.com/TekMos">Israel Diaz</a></p>
</footer>