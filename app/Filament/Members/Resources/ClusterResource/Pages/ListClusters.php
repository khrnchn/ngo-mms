<?php

namespace App\Filament\Members\Resources\ClusterResource\Pages;

use App\Filament\Members\Resources\ClusterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClusters extends ListRecords
{
    protected static string $resource = ClusterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
