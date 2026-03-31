<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('hero_image')
                            ->collection('contact-hero')
                            ->image()
                            ->conversion('web'),

                        TextInput::make('hero_title')
                            ->required(),

                        Textarea::make('hero_subtitle')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull()
                    ->collapsible(),

                Section::make('Map Section')
                    ->schema([
                        TextInput::make('map_title')
                            ->required(),

                        TextInput::make('map_subtitle')
                            ->required(),

                        Textarea::make('map_embed_url')
                            ->label('Google Maps Embed URL')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull()
                    ->collapsible(),

                Section::make('Form Section')
                    ->schema([
                        TextInput::make('form_title')
                            ->required(),

                        TextInput::make('submit_button_label')
                            ->required(),

                        Repeater::make('subject_options')
                            ->schema([
                                TextInput::make('label')
                                    ->required(),
                                TextInput::make('value')
                                    ->required(),
                            ])
                            ->itemLabel(fn (array $state): ?string => $state['label'] ?? null)
                            ->addActionLabel('Add subject')
                            ->defaultItems(0)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull()
                    ->collapsible(),

                Section::make('Info Section')
                    ->schema([
                        TextInput::make('info_title')
                            ->required(),

                        TextInput::make('info_subtitle')
                            ->required()
                            ->columnSpanFull(),

                        Section::make('Phone Card')
                            ->schema([
                                TextInput::make('phone_label')
                                    ->required(),
                                TextInput::make('phone_display')
                                    ->required(),
                                TextInput::make('phone_href')
                                    ->label('Phone Link')
                                    ->helperText('Example: tel:+6327000383'),
                                TextInput::make('phone_caption')
                                    ->required(),
                            ]),

                        Section::make('Email Card')
                            ->schema([
                                TextInput::make('email_label')
                                    ->required(),
                                TextInput::make('email_address')
                                    ->required()
                                    ->email(),
                                TextInput::make('email_caption')
                                    ->required(),
                            ]),

                        Section::make('Showroom Card')
                            ->schema([
                                TextInput::make('showroom_label')
                                    ->required(),
                                Textarea::make('showroom_address')
                                    ->required()
                                    ->rows(4)
                                    ->columnSpanFull(),
                                TextInput::make('showroom_caption')
                                    ->required(),
                            ]),
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
