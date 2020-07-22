<?php


namespace App\Packages\Block;


use Illuminate\Support\Facades\Facade;

class BlockFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Block';
    }
}
