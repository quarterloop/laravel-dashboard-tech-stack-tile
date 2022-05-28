<?php

namespace Quarterloop\TechStackTile;

use Livewire\Component;

class TechStackTileComponent extends Component
{

    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }


    public function render()
    {

        $techStackStore = TechStackStore::make();

        return view('dashboard-tech-stack-tile::tile', [
            'website' => config('dashboard.tiles.tech_stack.url'),
            'results' => $techStackStore->getData()['results'];
        ]);
    }
}
