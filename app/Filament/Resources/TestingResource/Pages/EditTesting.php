<?php

namespace App\Filament\Resources\TestingResource\Pages;

use App\Filament\Resources\TestingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTesting extends EditRecord
{
    protected static string $resource = TestingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),

        ];
    }
}
