<?php

namespace PackageBuilde\PackageName;


use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use PackageBuilde\PackageName\Resources\TestResource;


class TestServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-package-name-package';



    public function __construct($app)
    {
        parent::__construct($app);
            $this->resources = [
                TestResource::class,
            ];

    }
    public function configurePackage(Package $package): void
    {
        parent::configurePackage($package);

        $package
            ->name(static::$name)
            ->hasConfigFile('filament-package-name-config')
            ->hasMigrations([
                '2023_02_21_131555_tests'
            ]);


    }


    public function packageBooted(): void
    {
        parent::packageBooted();

        $this->publishes([
            __DIR__.'/resources' => base_path('app/Filament/Resources/'),
        ], 'filament-package-name-resources');

//        $this->publishes([
//            __DIR__.'/../Models' => base_path('app/Models/'),
//        ], 'filament-package-name-models');


//        Livewire::component(ActivitiesRelationManager::getName());
    }





}
