<?php

namespace GabrielWebStudio\Input\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    protected $signature = 'gws-input:install';

    protected $description = 'Install the package resources and NPM dependencies';

    public function handle()
    {
        // NPM Packages...
        $this->updateNodePackages(function ($packages) {
            return [
                    'alpinejs' => '^3.4.2',
                    'autoprefixer' => '^10.1.0',
                    'postcss' => '^8.2.1',
                    'postcss-import' => '^14.0.1',
                    'tailwindcss' => '^3.0.0',
                ] + $packages;
        });

        // Configuration Files
        copy(__DIR__.'/../../resources/tailwind.config.js', base_path('tailwind.config.js'));
        copy(__DIR__.'/../../resources/webpack.mix.js', base_path('webpack.mix.js'));
        copy(__DIR__.'/../../resources/css/app.css', resource_path('css/app.css'));
        copy(__DIR__.'/../../resources/js/app.js', resource_path('js/app.js'));

        (new Filesystem)->ensureDirectoryExists(resource_path('views/components'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../resources/components', resource_path('views/components'));

        (new Filesystem)->ensureDirectoryExists(app_path('View/Components'));
        (new Filesystem)->copyDirectory(__DIR__.'/../View/Components', app_path('View/Components'));

        $this->info('Inputs scaffolding installed successfully.');
        $this->comment('Please execute the "npm install && npm run dev" command to build your assets.');
    }

    /**
     * Update the "package.json" file.
     *
     * @param  callable  $callback
     * @param bool $dev
     * @return void
     */
    protected static function updateNodePackages(callable $callback, bool $dev = true)
    {
        if (! file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = $dev ? 'devDependencies' : 'dependencies';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = $callback(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL
        );
    }
}
