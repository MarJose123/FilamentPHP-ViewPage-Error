<?php

namespace App\Filament\Resources\TestingResource\Pages;

use App\Filament\Resources\TestingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTesting extends ViewRecord
{
    protected static string $resource = TestingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
