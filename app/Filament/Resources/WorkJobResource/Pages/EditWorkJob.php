<?php

namespace App\Filament\Resources\WorkJobResource\Pages;

use App\Filament\Resources\WorkJobResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkJob extends EditRecord
{
    protected static string $resource = WorkJobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
