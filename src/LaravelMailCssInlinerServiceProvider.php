<?php

namespace PulkitJalan\LaravelMailCssInliner;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\ServiceProvider;
use Openbuildings\Swiftmailer\CssInlinerPlugin;
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

class LaravelMailCssInlinerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $converter = new CssToInlineStyles();
        $converter->setUseInlineStylesBlock(true);
        $converter->setStripOriginalStyleTags(true);

        $this->app[Mailer::class]
            ->getSwiftMailer()
            ->registerPlugin(new CssInlinerPlugin($converter));
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
