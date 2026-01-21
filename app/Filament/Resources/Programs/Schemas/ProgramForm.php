<?php

namespace App\Filament\Resources\Programs\Schemas;

use App\Models\Artist;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Select::make('artists')
                    ->relationship('artists', 'name')
                    ->options(Artist::query()->pluck('name', 'id'))
                    ->searchable()
                    ->multiple(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
