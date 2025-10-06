<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Portfolio Content';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('date')->required()->label('Period (e.g. 2022 - Present)'),
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\TextInput::make('company')->required(),
            Forms\Components\Textarea::make('description')->rows(4)->required(),
            Forms\Components\TextInput::make('icon')->label('Icon Class')->default('fas fa-calendar-alt'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('date'),
            Tables\Columns\TextColumn::make('title'),
            Tables\Columns\TextColumn::make('company'),
        ])->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageExperiences::route('/'),
        ];
    }
}
