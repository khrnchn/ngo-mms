<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UserClusterResource\Pages;
use App\Models\UserCluster;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserClusterResource extends Resource
{
    protected static ?string $model = UserCluster::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserClusters::route('/'),
            'create' => Pages\CreateUserCluster::route('/create'),
            'edit' => Pages\EditUserCluster::route('/{record}/edit'),
        ];
    }
}
