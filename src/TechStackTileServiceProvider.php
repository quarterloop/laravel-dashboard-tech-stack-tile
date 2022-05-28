<?php

namespace Quarterloop\TechStackTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Quarterloop\TechStackTile\Commands\FetchTechStackCommand;

class TechStackTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchTechStackCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-tech-stack-tile'),
        ], 'dashboard-tech-stack-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-tech-stack-tile');

        Livewire::component('tech-stack-tile', TechStackTileComponent::class);
    }
}
