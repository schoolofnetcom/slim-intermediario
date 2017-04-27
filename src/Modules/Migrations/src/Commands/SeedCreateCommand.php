<?php


namespace SonSlim\Migrations\Commands;


use Phinx\Console\Command\SeedCreate;

class SeedCreateCommand extends SeedCreate
{
    protected function configure()
    {
        parent::configure();
        $this->setName('migration:seed:create');
    }
}