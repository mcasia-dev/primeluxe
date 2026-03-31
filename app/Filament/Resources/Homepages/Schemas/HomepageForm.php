<?php

namespace App\Filament\Resources\Homepages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomepageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('hero_image')
                            ->collection('homepage-hero')
                            ->image()
                            ->conversion('web'),

                        TextInput::make('hero_title')
                            ->required(),

                        Textarea::make('hero_subtitle')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull()
                    ->collapsible(),

                Section::make('Sophisticated Storage Section')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('storage_image')
                            ->collection('homepage-storage')
                            ->image()
                            ->conversion('web'),

                        TextInput::make('storage_eyebrow')
                            ->required(),

                        TextInput::make('storage_title')
                            ->required()
                            ->columnSpanFull(),

                        Repeater::make('storage_paragraphs')
                            ->schema([
                                RichEditor::make('text')
                                    ->required()
                                    ->columnSpanFull(),
                            ])
                            ->itemLabel(fn (array $state): ?string => str($state['text'] ?? '')->limit(40)->toString())
                            ->addActionLabel('Add paragraph')
                            ->defaultItems(0)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull()
                    ->collapsible(),

                Section::make('Offerings Section')
                    ->schema([
                        TextInput::make('offerings_eyebrow')
                            ->required(),

                        TextInput::make('offerings_title')
                            ->required()
                            ->columnSpanFull(),

                        Repeater::make('offerings')
                            ->schema([
                                TextInput::make('title')
                                    ->required(),
                                TextInput::make('tagline')
                                    ->required()
                                    ->columnSpanFull(),
                                TextInput::make('route')
                                    ->required()
                                    ->helperText('Named route, for example: solutions'),
                                TextInput::make('span')
                                    ->required()
                                    ->columnSpanFull(),
                                FileUpload::make('image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('homepage/offerings')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                            ])
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                            ->addActionLabel('Add offering')
                            ->defaultItems(0)
                            ->collapsible()
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull()
                    ->collapsible(),

                Section::make('Partners Section')
                    ->schema([
                        TextInput::make('partners_eyebrow')
                            ->required(),

                        TextInput::make('partners_title')
                            ->required()
                            ->columnSpanFull(),

                        Repeater::make('brands')
                            ->schema([
                                TextInput::make('name')
                                    ->nullable(),
                                FileUpload::make('image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('homepage/brands')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                            ])
                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? 'Brand')
                            ->addActionLabel('Add brand')
                            ->defaultItems(0)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull()
                    ->collapsible(),

                Toggle::make('is_published')
                    ->default(true)
                    ->required(),
            ]);
    }
}
