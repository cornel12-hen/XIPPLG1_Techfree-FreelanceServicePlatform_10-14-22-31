<?php

namespace App\Filament\Resources\WorkJobResource\Pages;

use App\Filament\Resources\WorkJobResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkJobs extends ListRecords
{
    protected static string $resource = WorkJobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
