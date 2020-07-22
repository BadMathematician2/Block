<?php


namespace App\Packages\Block;


use Block\Block;
use Illuminate\Support\ServiceProvider;

class BlockServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/contextMenuBlock.js' => 'public'
        ]);
    }

    public function register()
    {
        $this->app->singleton('Block', function (){
            return $this->app->make(Block::class);
        });
    }
}
