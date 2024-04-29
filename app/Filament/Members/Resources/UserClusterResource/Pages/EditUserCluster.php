<?php

namespace App\Filament\Members\Resources\UserClusterResource\Pages;

use App\Filament\Members\Resources\UserClusterResource;
use Filament\Resources\Pages\EditRecord;

class EditUserCluster extends EditRecord
{
    protected static string $resource = UserClusterResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
