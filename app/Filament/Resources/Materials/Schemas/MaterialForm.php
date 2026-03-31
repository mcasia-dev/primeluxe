<?php

namespace App\Filament\Resources\Materials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class MaterialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Banner Section')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('banner')
                            ->collection('material-banner')
                            ->image()
                            ->conversion('web'),

                        TextInput::make('title')
                            ->required(),

                        TextInput::make('subtitle')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull()
                    ->collapsible(),

                Section::make('Introduction Section')
                    ->schema([
                        RichEditor::make('description')
                            ->columnSpanFull(),

                        TextInput::make('button_label')
                            ->label('Button Label')
                            ->nullable(),

                        SpatieMediaLibraryFileUpload::make('introduction-image')
                            ->collection('material-image')
                            ->image()
                            ->conversion('web'),
                    ])
                    ->columnSpanFull()
                    ->collapsible(),

                Section::make('Collections Section')
                    ->schema([
                        Repeater::make('meta_data')
                            ->schema([
                                TextInput::make('title')
                                    ->required(),

                                TextInput::make('subtitle')
                                    ->nullable()
                                    ->columnSpanFull(),

                                FileUpload::make('image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('materials/collections')
                                    ->visibility('public')
                                    ->columnSpanFull(),

                                RichEditor::make('description')
                                    ->columnSpanFull(),

                                Repeater::make('items')
                                    ->schema([
                                        TextInput::make('title')
                                            ->required(),
                                    ])
                                    ->defaultItems(0)
                                    ->collapsible()
                                    ->columnSpanFull(),
                            ])
                            ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                            ->addActionLabel('Add collection')
                            ->collapsible()
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull()
                    ->columns(1),

                Toggle::make('is_published')
                    ->default(true)
                    ->nullable(),
            ]);
    }
}
