<?php


namespace SonSlim\Core\Controllers;

use Slim\Container;

abstract class ControllerAbstract
{
    /**
     * @var Container
     */
    protected $c;

    /**
     * ControllerAbstract constructor.
     * @param Container $c
     */
    public function __construct(Container $c)
    {
        $this->c = $c;
    }
}