<?php

namespace App\Filament\Admin\Resources\ClusterResource\Pages;

use App\Filament\Admin\Resources\ClusterResource;
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
