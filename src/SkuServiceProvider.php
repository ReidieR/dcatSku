<?php

namespace Reidier\DcatSku;

use Illuminate\Support\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;

class SkuServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Sku $extension)
    {
        // if (! Sku::boot()) {
        //     return ;
        // }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'sku');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/dcat-admin-extensions/sku')],
                'sku'
            );
        }

        Admin::booting(function () {
            Form::extend('sku', SkuField::class);
        });
    }
}
