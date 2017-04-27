<?php


namespace SonSlim\Authentication;


use SonSlim\Authentication\Controllers\AuthenticationController;

class Route extends \SonSlim\Core\Route
{
    public function create()
    {
        $this->app->get('/login', AuthenticationController::class . ':login');
    }
}