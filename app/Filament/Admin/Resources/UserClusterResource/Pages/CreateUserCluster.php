<?php

namespace App\Filament\Admin\Resources\UserClusterResource\Pages;

use App\Filament\Admin\Resources\UserClusterResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUserCluster extends CreateRecord
{
    protected static string $resource = UserClusterResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
