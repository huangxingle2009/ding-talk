<?php

namespace Hbl\DingTalk;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(DingTalk::class, function(){
            return new DingTalk(config('ding-talk'));
        });
        $this->app->alias(DingTalk::class, 'DingTalk');
    }

    public function provides()
    {
        return [DingTalk::class, 'DingTalk'];
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/ding-talk.php' => config_path('ding-talk.php'),
        ]);
    }

}