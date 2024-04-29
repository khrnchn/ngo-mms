<?php

namespace App\Filament\Members\Resources\OrganizationResource\Pages;

use App\Filament\Members\Resources\OrganizationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrganization extends CreateRecord
{
    protected static string $resource = OrganizationResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
