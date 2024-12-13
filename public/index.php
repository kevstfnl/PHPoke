<?php
require_once("../src/models/repos/Database.php");
require_once("../src/models/repos/PokemonRepo.php");
require_once("../src/models/Pokemon.php");
require_once("../core/Router.php");
require_once("../src/controllers/Controller.php");
require_once("../src/controllers/HomeController.php");
require_once("../src/controllers/NewPokemonController.php");
require_once("../src/controllers/KillPokemonController.php");

try {
    $router = new Router();
    $router->register(new HomeController());
    $router->register(new NewPokemonController());
    $router->register(new KillPokemonControler());
    $router->init();
} catch (Exception $e) {
    echo $e->getMessage();
}
