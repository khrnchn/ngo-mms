<?php

namespace App\Filament\Admin\Resources\UserClusterResource\Pages;

use App\Filament\Admin\Resources\UserClusterResource;
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
