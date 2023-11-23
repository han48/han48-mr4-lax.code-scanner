<?php

namespace Mr4Lax\CodeScanner;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class CodeScannerServiceProvider extends ServiceProvider
{

    /**
     * {@inheritdoc}
     */
    public function boot(CodeScanner $extension)
    {
        if (!CodeScanner::boot()) {
            return;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'mr4-lax');
        }

        if ($this->app->runningInConsole() && $views = $extension->views()) {
            $this->publishes(
                [$views => resource_path('views/vendor/mr4-lax')],
                'mr4-lax-code-scanner'
            );
        }

        Admin::booting(function () {
            Form::extend('codescanner', CodeScannerEditor::class);
        });

    }
}
