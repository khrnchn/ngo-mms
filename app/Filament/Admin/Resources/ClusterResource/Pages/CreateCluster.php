<?php

namespace App\Filament\Admin\Resources\ClusterResource\Pages;

use App\Filament\Admin\Resources\ClusterResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCluster extends CreateRecord
{
    protected static string $resource = ClusterResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
