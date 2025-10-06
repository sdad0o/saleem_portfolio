<?php

namespace App\Filament\Resources\ProfileResource\Pages;

use App\Filament\Resources\ProfileResource;
use Filament\Resources\Pages\ManageRecords;

class ManageProfiles extends ManageRecords
{
    protected static string $resource = ProfileResource::class;
    protected static ?string $title = 'Profile Information';
    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}
