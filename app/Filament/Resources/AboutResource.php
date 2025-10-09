<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Textarea::make('description')
                ->label('About Description')
                ->rows(5)
                ->required(),

            Forms\Components\Section::make('Statistics')->schema([
                Forms\Components\Grid::make(2)->schema([
                    Forms\Components\TextInput::make('stat_1_value')->label('Stat #1 Value')->placeholder('e.g. 50+'),
                    Forms\Components\TextInput::make('stat_1_label')->label('Stat #1 Label')->placeholder('Training Completed'),

                    Forms\Components\TextInput::make('stat_2_value')->label('Stat #2 Value')->placeholder('e.g. 5+'),
                    Forms\Components\TextInput::make('stat_2_label')->label('Stat #2 Label')->placeholder('Years Experience'),

                    Forms\Components\TextInput::make('stat_3_value')->label('Stat #3 Value')->placeholder('e.g. 30+'),
                    Forms\Components\TextInput::make('stat_3_label')->label('Stat #3 Label')->placeholder('Happy Clients'),

                    Forms\Components\TextInput::make('stat_4_value')->label('Stat #4 Value')->placeholder('e.g. 15+'),
                    Forms\Components\TextInput::make('stat_4_label')->label('Stat #4 Label')->placeholder('Technologies'),
                ]),
            ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
