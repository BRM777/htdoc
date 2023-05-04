<?php

namespace Srt;

use Error;

class Settings
{
    private array $_settings;

    public function__construct(array $settings = [])
    {
        $this->_settings = $settings;
    }

    public function__get($key)
    {
        if(array_key_exists($key, $this->_settings)) {
            return $this->_settings[$key];
    }
    throw new Error(massage'Accessing a non-existent property');
}

public function getRootPath(): string
{
    return $this->path['root'] ?'/'. $this->path['root'] :'';
}

public function getViewsPath(): string
    {
        return '/' .$this->path['views'] ?? '';
    }
}