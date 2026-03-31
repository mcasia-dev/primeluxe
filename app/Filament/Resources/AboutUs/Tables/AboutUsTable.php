<?php

namespace App\Filament\Resources\AboutUs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutUsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('company_profile_title')
                    ->searchable(),
                TextColumn::make('mission_title')
                    ->searchable(),
                TextColumn::make('mission_subtitle')
                    ->searchable(),
                TextColumn::make('vision_title')
                    ->searchable(),
                TextColumn::make('vision_subtitle')
                    ->searchable(),
                TextColumn::make('our_values_title')
                    ->searchable(),
                TextColumn::make('our_values_eyebrow')
                    ->searchable(),
                TextColumn::make('why_choose_title')
                    ->searchable(),
                IconColumn::make('is_published')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
