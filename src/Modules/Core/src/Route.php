<?php


namespace SonSlim\Core;

use Slim\App;

abstract class Route
{
    /**
     * @var App
     */
    protected $app;

    /**
     * Route constructor.
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
    }

    abstract public function create();
}