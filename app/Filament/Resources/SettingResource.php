<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Site Settings';
    protected static ?string $pluralLabel = 'Theme Colors';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\ColorPicker::make('primary_color')->label('Primary Color'),
            Forms\Components\ColorPicker::make('secondary_color')->label('Secondary Color'),
            Forms\Components\ColorPicker::make('dark_color')->label('Dark Color'),
            Forms\Components\ColorPicker::make('gray_color')->label('Gray Color'),
            Forms\Components\ColorPicker::make('light_gray_color')->label('Light Gray Color'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ColorColumn::make('primary_color'),
                Tables\Columns\ColorColumn::make('secondary_color'),
                Tables\Columns\ColorColumn::make('dark_color'),
                Tables\Columns\ColorColumn::make('gray_color'),
                Tables\Columns\ColorColumn::make('light_gray_color'),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
