<?php

namespace PulkitJalan\LaravelMailCssInliner;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\ServiceProvider;
use Openbuildings\Swiftmailer\CssInlinerPlugin;

class LaravelMailCssInlinerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app[Mailer::class]
            ->getSwiftMailer()
            ->registerPlugin(new CssInlinerPlugin());
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
