<?php

namespace PackageBuilde\PackageName\Resources\TestResource\Pages;


use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use PackageBuilde\PackageName\Resources\TestResource;

class CreateTest extends CreateRecord
{
    protected static string $resource = TestResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Test registered')
            ->body('The Test has been created successfully.');
    }
}
