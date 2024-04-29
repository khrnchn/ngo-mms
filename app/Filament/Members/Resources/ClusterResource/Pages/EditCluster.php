<?php

namespace App\Filament\Members\Resources\ClusterResource\Pages;

use App\Filament\Members\Resources\ClusterResource;
use Filament\Resources\Pages\EditRecord;

class EditCluster extends EditRecord
{
    protected static string $resource = ClusterResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
