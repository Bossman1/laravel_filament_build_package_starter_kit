<?php

namespace PackageBuilde\PackageName\Resources\TestResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Actions;
use PackageBuilde\PackageName\Resources\TestResource;

class ListTests extends ListRecords
{
    protected static string $resource = TestResource::class;


    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
