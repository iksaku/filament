<?php

namespace Filament\Resources\Pages;

use Filament\Resources\Route;

class Page extends \Filament\Pages\Page
{
    public static $resource;

    public static function authorizationManager()
    {
        return static::getResource()::authorizationManager();
    }

    public static function getResource()
    {
        return static::$resource;
    }

    public static function routeTo($uri, $name)
    {
        return new Route(static::class, $uri, $name);
    }

    public static function getModel()
    {
        return static::getResource()::getModel();
    }

    public static function getQuery()
    {
        return static::getModel()::query();
    }
}
