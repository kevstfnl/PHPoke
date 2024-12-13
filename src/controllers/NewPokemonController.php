<?php

class NewPokemonController extends Controller
{

    public function __construct()
    {
        parent::__construct("/new", "post");
    }

    public function call()
    {
        if (isset($_POST["cap"])) {
            $pokemon = Pokemon::get($_POST["cap"]);
            $pokemon->setCaptured(true);
            Pokemon::update($pokemon);
        }
        header("Location: /");
    }
}
