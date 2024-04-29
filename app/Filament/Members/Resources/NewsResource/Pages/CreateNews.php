<?php

namespace App\Filament\Members\Resources\NewsResource\Pages;

use App\Filament\Members\Resources\NewsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
