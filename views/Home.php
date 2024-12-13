<?php require_once("../views/components/head.php") ?>

<body>
    <?php require_once("../views/components/header.php") ?>
    <main class="homemain">
        <nav>
            <h3>Vos pokemon:</h3>
            <ul>
                <?php
                $capturedPokemon = Pokemon::getCaptured();
                foreach ($capturedPokemon as $mypoke) {
                ?>
                    <li>
                        <form action="/remove" method="post">
                            <p><?= $mypoke->getName() ?></p>
                            <button class="btn red" name="remove" value="<?= $mypoke->getId() ?>">Faire piquer</button>
                        </form>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <section class="pokeview">
            <h2>Un pokemon sauvage apparait:</h2>
            <article>
                <?php $pokemon = Pokemon::get(rand(1, 151)) ?>
                <h3><?= $pokemon->getName() ?></h3>
                <form class="controllers" action="/new" method="post">
                    <button class="btn green" name="cap" value="<?= $pokemon->getId() ?>">Sequestrer</button>
                    <button class="btn red" name="nocap" value="<?= $pokemon->getId() ?>">Abattre</button>
                </form>
            </article>
        </section>
    </main>
    <?php require_once("../views/components/footer.php") ?>
</body>