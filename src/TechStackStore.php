<?php

namespace Quarterloop\TechStackTile;

use Spatie\Dashboard\Models\Tile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

    public function getLastUpdateTime()
    {
        $tileName = 'techStack';

        $queryTime = DB::table('dashboard_tiles')->select('updated_at')->where('name', '=', $tileName)->get();

        $responseTime = Str::substr($queryTime, 26, 9);

        return $responseTime;
    }

    public function getLastUpdateDate()
    {
        $tileName = 'techStack';

        $queryDate = DB::table('dashboard_tiles')->select('updated_at')->where('name', '=', $tileName)->get();

        $responseDate = Str::substr($queryDate, 16, 10);

        return $responseDate;
    }
}
