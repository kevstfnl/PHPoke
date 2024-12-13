<?php

class Pokemon extends PokemonRepo {
    private int $id;
    private string $name;
    private bool $captured;

    public function __construct(int $id, string $name,  bool $captured)
    {
        $this->id = $id;
        $this->name = $name;
        $this->captured = $captured;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isCaptured(): bool
    {
        return $this->captured;
    }

    public function setCaptured(bool $captured): void
    {
        $this->captured = $captured;
    }
}