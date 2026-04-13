<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;
    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Messages reçus';
    protected static ?string $modelLabel = 'Message';
    protected static ?string $pluralModelLabel = 'Messages';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nom complet')
                ->disabled(),
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->disabled(),
            Forms\Components\TextInput::make('phone')
                ->label('Téléphone')
                ->disabled(),
            Forms\Components\TextInput::make('service')
                ->label('Service souhaité')
                ->disabled(),
            Forms\Components\Textarea::make('message')
                ->label('Message')
                ->disabled()
                ->columnSpanFull(),
            Forms\Components\Toggle::make('is_read')
                ->label('Marqué comme lu'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Téléphone')
                    ->default('—'),
                Tables\Columns\TextColumn::make('service')
                    ->label('Service')
                    ->badge()
                    ->default('—'),
                Tables\Columns\IconColumn::make('is_read')
                    ->label('Lu')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Reçu le')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_read')
                    ->label('Statut lecture')
                    ->trueLabel('Lus')
                    ->falseLabel('Non lus'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label('Voir'),
                Tables\Actions\EditAction::make()->label('Modifier'),
                Tables\Actions\DeleteAction::make()->label('Supprimer'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit'   => Pages\EditContact::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_read', false)->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }
}
