<?php

namespace App\Filament\Resources\AboutUs\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AboutUsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('About Us')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('banner')
                            ->collection('about-us-banner')
                            ->image()
                            ->conversion('web'),

                        TextInput::make('title')
                            ->required(),

                        RichEditor::make('description')
                            ->nullable()
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull()
                    ->collapsible(),

                Section::make('Company Profile')
                    ->schema([
                        TextInput::make('company_profile_title')
                            ->required(),

                        RichEditor::make('company_profile_description')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull()
                    ->collapsible(),

                Section::make('Mission & Vision')
                    ->schema([
                        Section::make('Mission')
                            ->schema([
                                TextInput::make('mission_title')
                                    ->required(),

                                TextInput::make('mission_subtitle')
                                    ->required(),

                                RichEditor::make('mission_description')
                                    ->columnSpanFull(),

                            ]),

                        Section::make('Vision')
                            ->schema([
                                TextInput::make('vision_title')
                                    ->required(),

                                TextInput::make('vision_subtitle')
                                    ->required(),

                                RichEditor::make('vision_description')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columns(2)
                    ->columnSpanFull()
                    ->collapsible(),


                Section::make('Our Values')
                    ->schema([
                        TextInput::make('our_values_title')
                            ->required(),

                        TextInput::make('our_values_eyebrow'),

                        RichEditor::make('our_values_description')
                            ->columnSpanFull(),

                        Repeater::make('values')
                            ->schema([
                                RichEditor::make('description')
                            ]),
                    ])
                    ->columnSpanFull()
                    ->collapsible(),

                Section::make('Why Choose')
                    ->schema([
                        TextInput::make('why_choose_title')
                            ->required(),

                        RichEditor::make('why_choose_description')
                            ->columnSpanFull(),

                        Repeater::make('why_choose_meta_data')
                            ->schema([
                                Textinput::make('title')
                                    ->required(),

                                RichEditor::make('description')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull()
                    ->collapsible(),

                Toggle::make('is_published')
                    ->default(true)
                    ->required(),
            ]);
    }
}
