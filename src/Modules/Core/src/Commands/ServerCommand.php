<?php


namespace SonSlim\Core\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ServerCommand extends Command
{
    protected function configure()
    {
        $this->setName('server')
            ->setDescription('run a PHP Built-In Server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write('Run server in http://localhost:8080');

        exec('php -S localhost:8080 -t ' . getcwd() . DIRECTORY_SEPARATOR . 'public');
    }
}