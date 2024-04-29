<?php

namespace App\Filament\Members\Resources\NewsResource\Pages;

use App\Filament\Members\Resources\NewsResource;
use Filament\Resources\Pages\EditRecord;

class EditNews extends EditRecord
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
