<?php

class PokemonRepo extends Database
{
    public static function request(string $sqlRequest)
    {
        $request = self::getInstance()->query($sqlRequest);
        self::disconnect();
        return $request;
    }
    public static function execute(string $sqlRequest)
    {
        $request = self::getInstance()->prepare($sqlRequest);
        $request->execute();
        self::disconnect();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function create(Pokemon $pokemon)
    {
        $name = $pokemon->getName();
        $isCaptured = $pokemon->isCaptured();
        return self::request("INSERT INTO pokemons (name, captured) VALUES ($name, $isCaptured)");
    }
    public static function update(Pokemon $pokemon)
    {
        $id = $pokemon->getId();
        $isCaptured = $pokemon->isCaptured() ? 1 : 0;
        return self::request("UPDATE pokemons SET captured = $isCaptured WHERE id = $id");
    }
    public static function delete(Pokemon $pokemon)
    {
        $id = $pokemon->getId();
        return self::request("DELETE FROM pokemons WHERE id = $id");
    }
    public static function get($id): Pokemon
    {
        $response =  self::execute("SELECT * FROM pokemons WHERE id = $id")[0];
        return new Pokemon($response["id"], $response["name"], $response["captured"] == 0 ? false : true);
    }
    public static function getCaptured(): array
    {
        $response =  self::execute("SELECT * FROM pokemons WHERE captured = 1");

        $pokemons = [];
        foreach ($response as $value) {
            $pokemon = new Pokemon((int) $value["id"], $value["name"], true);

            // Vérification de type pour s'assurer que chaque élément est bien un objet Pokemon
            if (!$pokemon instanceof Pokemon) {
                throw new InvalidArgumentException("Le type de l'objet n'est pas valide.");
            }
            array_push($pokemons, $pokemon);
        }
        return $pokemons;
    }
}
