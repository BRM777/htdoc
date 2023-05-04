<?php

namesace Src;

use Error;

class Application
{
    private Settings $settings;
    private Route $route;

    public function__construct(Settings $settings)
    {
        $this->settings = $settings;
        $this->route = new Route();
    }

public function__get($key)
{
    if($key ==='settings'){
        return $this->settings;
    }
    throw new Error(message'Accessing a non-existent property');
}

public function run(): void
{
   $this->route->setPrefix($this->settings->getRootPath());
   $this->route->start();
    }
}