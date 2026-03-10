<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config {
    private static ?Config $config = null;
    private array $settings;

    public function __construct(array $settings) {
        $this->settings = $settings;
    }

    public static function getConfig(array $settings): self
    {
        if(self::$config === null){
            self::$config = new Config($settings);
        }

        return self::$config;
    }

    public function getSetting(string $key): mixed
    {
        return $this->settings[$key];
    }
}