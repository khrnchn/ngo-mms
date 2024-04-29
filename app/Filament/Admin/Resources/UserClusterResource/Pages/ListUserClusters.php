<?php

namespace App\Filament\Admin\Resources\UserClusterResource\Pages;

use App\Filament\Admin\Resources\UserClusterResource;
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
