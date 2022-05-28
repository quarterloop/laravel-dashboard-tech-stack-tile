<?php

namespace Quarterloop\TechStackTile;

use Spatie\Dashboard\Models\Tile;

class TechStackStore
{
    private Tile $tile;

    public static function make()
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName("techStack");
    }

    public function setData(array $data): self
    {
        $this->tile->putData('tech', $data);

        return $this;
    }

    public function getData(): array
    {
        return$this->tile->getData('tech') ?? [];
    }
}
