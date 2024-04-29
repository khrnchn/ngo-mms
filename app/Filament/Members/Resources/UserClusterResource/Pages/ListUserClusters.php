<?php

namespace App\Filament\Members\Resources\UserClusterResource\Pages;

use App\Filament\Members\Resources\UserClusterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserClusters extends ListRecords
{
    protected static string $resource = UserClusterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
