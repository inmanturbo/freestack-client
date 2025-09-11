<?php

namespace Inmanturbo\FreestackClient;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Inmanturbo\FreestackClient\Commands\FreestackClientCommand;

class FreestackClientServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('freestack-client')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_freestack_client_table')
            ->hasCommand(FreestackClientCommand::class);
    }
}
