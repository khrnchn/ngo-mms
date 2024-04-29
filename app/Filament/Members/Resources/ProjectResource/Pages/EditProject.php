<?php

namespace App\Filament\Members\Resources\ProjectResource\Pages;

use App\Filament\Members\Resources\ProjectResource;
use Filament\Resources\Pages\EditRecord;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
