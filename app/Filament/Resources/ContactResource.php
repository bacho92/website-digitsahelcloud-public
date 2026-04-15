<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists;
use Filament\Infolists\Infolist;

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

            Forms\Components\Section::make('Profil du demandeur')
                ->icon('heroicon-o-user-circle')
                ->columns(2)
                ->schema([
                    Forms\Components\Select::make('demandeur_type')
                        ->label('Type de demandeur')
                        ->options([
                            'entreprise'  => '🏢 Entreprise / Organisation',
                            'particulier' => '👤 Particulier / Freelance',
                        ])
                        ->disabled(),

                    Forms\Components\TextInput::make('company')
                        ->label('Nom de l\'entreprise')
                        ->disabled(),

                    Forms\Components\TextInput::make('name')
                        ->label('Nom complet')
                        ->disabled(),

                    Forms\Components\TextInput::make('role')
                        ->label('Rôle / Poste')
                        ->disabled(),

                    Forms\Components\TextInput::make('email')
                        ->label('Email')
                        ->disabled(),

                    Forms\Components\TextInput::make('phone')
                        ->label('Téléphone WhatsApp')
                        ->disabled(),
                ]),

            Forms\Components\Section::make('Demande')
                ->icon('heroicon-o-chat-bubble-left-right')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('service')
                        ->label('Service souhaité')
                        ->disabled()
                        ->columnSpanFull(),

                    Forms\Components\Textarea::make('message')
                        ->label('Message')
                        ->disabled()
                        ->rows(6)
                        ->columnSpanFull(),
                ]),

            Forms\Components\Section::make('Suivi')
                ->icon('heroicon-o-check-circle')
                ->schema([
                    Forms\Components\Toggle::make('is_read')
                        ->label('Marqué comme lu')
                        ->helperText('Cochez une fois que vous avez traité cette demande.'),
                ]),
        ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([

            Infolists\Components\Section::make('Profil du demandeur')
                ->icon('heroicon-o-user-circle')
                ->columns(2)
                ->schema([
                    Infolists\Components\TextEntry::make('demandeur_type')
                        ->label('Type')
                        ->formatStateUsing(fn($state) => match ($state) {
                            'entreprise'  => '🏢 Entreprise / Organisation',
                            'particulier' => '👤 Particulier / Freelance',
                            default       => '—',
                        })
                        ->badge()
                        ->color(fn($state) => match ($state) {
                            'entreprise'  => 'info',
                            'particulier' => 'success',
                            default       => 'gray',
                        }),

                    Infolists\Components\TextEntry::make('company')
                        ->label('Entreprise / Organisation')
                        ->default('—'),

                    Infolists\Components\TextEntry::make('name')
                        ->label('Nom complet'),

                    Infolists\Components\TextEntry::make('role')
                        ->label('Rôle / Poste')
                        ->badge()
                        ->color('warning')
                        ->default('—'),

                    Infolists\Components\TextEntry::make('email')
                        ->label('Email')
                        ->copyable()
                        ->icon('heroicon-o-envelope'),

                    Infolists\Components\TextEntry::make('phone')
                        ->label('Téléphone WhatsApp')
                        ->copyable()
                        ->icon('heroicon-o-phone')
                        ->default('—'),
                ]),

            Infolists\Components\Section::make('Demande')
                ->icon('heroicon-o-chat-bubble-left-right')
                ->schema([
                    Infolists\Components\TextEntry::make('service')
                        ->label('Service souhaité')
                        ->badge()
                        ->color('primary'),

                    Infolists\Components\TextEntry::make('message')
                        ->label('Message')
                        ->columnSpanFull(),
                ]),

            Infolists\Components\Section::make('Informations')
                ->icon('heroicon-o-information-circle')
                ->columns(2)
                ->schema([
                    Infolists\Components\TextEntry::make('created_at')
                        ->label('Reçu le')
                        ->dateTime('d/m/Y à H:i'),

                    Infolists\Components\IconEntry::make('is_read')
                        ->label('Statut')
                        ->boolean()
                        ->trueIcon('heroicon-o-check-circle')
                        ->falseIcon('heroicon-o-clock')
                        ->trueColor('success')
                        ->falseColor('warning'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('demandeur_type')
                    ->label('Type')
                    ->formatStateUsing(fn($state) => match ($state) {
                        'entreprise'  => '🏢 Entreprise',
                        'particulier' => '👤 Particulier',
                        default       => '—',
                    })
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'entreprise'  => 'info',
                        'particulier' => 'success',
                        default       => 'gray',
                    }),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable()
                    ->description(fn($record) => $record->company ?? null),

                Tables\Columns\TextColumn::make('role')
                    ->label('Poste')
                    ->badge()
                    ->color('warning')
                    ->default('—'),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable(),

                Tables\Columns\TextColumn::make('phone')
                    ->label('WhatsApp')
                    ->copyable()
                    ->default('—'),

                Tables\Columns\TextColumn::make('service')
                    ->label('Service')
                    ->badge()
                    ->color('primary')
                    ->default('—'),

                Tables\Columns\IconColumn::make('is_read')
                    ->label('Lu')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('warning'),

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

                Tables\Filters\SelectFilter::make('demandeur_type')
                    ->label('Type de demandeur')
                    ->options([
                        'entreprise'  => '🏢 Entreprise',
                        'particulier' => '👤 Particulier',
                    ]),

                Tables\Filters\SelectFilter::make('role')
                    ->label('Rôle / Poste')
                    ->options([
                        'Directeur Général / PDG'             => 'Directeur Général / PDG',
                        'Responsable IT / DSI'                => 'Responsable IT / DSI',
                        'Directeur Administratif & Financier' => 'DAF',
                        'Responsable RH'                      => 'Responsable RH',
                        'Chef de projet'                      => 'Chef de projet',
                        'Développeur / Technicien'            => 'Développeur / Technicien',
                        'Commercial / Marketing'              => 'Commercial / Marketing',
                        'Autre'                               => 'Autre',
                    ]),
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
