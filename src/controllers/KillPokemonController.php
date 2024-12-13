<?php
class KillPokemonControler extends Controller
{

    public function __construct()
    {
        parent::__construct("/remove", "post");
    }

    public function call()
    {
        var_dump($_POST["remove"]);
        if (isset($_POST["remove"])) {
            $pokemon = Pokemon::get($_POST["remove"]);
            $pokemon->setCaptured(false);
            Pokemon::update($pokemon);
        }
        header("Location: /");
    }
}
