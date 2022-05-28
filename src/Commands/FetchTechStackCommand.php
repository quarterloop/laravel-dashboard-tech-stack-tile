<?php

namespace Quarterloop\TechStackTile\Commands;

use Illuminate\Console\Command;
use Quarterloop\TechStackTile\Services\TechStackAPI;
use Quarterloop\TechStackTile\TechStackStore;

class FetchTechStackCommand extends Command
{
    protected $signature = 'dashboard:fetch-tech-stack-data';

    protected $description = 'Fetch Tech Stack data';

    public function handle(TechStackAPI $tech_stack_api)
    {

        $this->info('Fetching tech stack data ...');

        $techStack = $tech_stack_api::getTechStack(
            config('dashboard.tiles.tech_stack.url'),
            config('dashboard.tiles.tech_stack.key'),
        );

        TechStackStore::make()->setData($techStack);

        $this->info('Stored data ...');

        $this->info('All done!');
    }
}
