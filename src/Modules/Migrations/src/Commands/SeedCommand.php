<?php


namespace SonSlim\Migrations\Commands;

use Phinx\Console\Command\SeedRun;

class SeedCommand extends SeedRun
{
    protected function configure()
    {
        parent::configure();
        $this->setName('migration:seed:run');
    }
}