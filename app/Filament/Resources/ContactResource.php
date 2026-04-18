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
use Filament\Notifications\Notification;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;
    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Messages reçus';
    protected static ?string $modelLabel = 'Message';
    protected static ?string $pluralModelLabel = 'Messages';
    protected static ?int $navigationSort = 1;

    public static function canCreate(): bool
    {
        return false;
    }

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

            Forms\Components\Section::make('Suivi & Actions')
                ->icon('heroicon-o-check-circle')
                ->columns(2)
                ->schema([
                    Forms\Components\Select::make('statut')
                        ->label('Statut')
                        ->options([
                            'non_lu'    => '🔴 Non lu',
                            'en_cours'  => '🟡 En cours de traitement',
                            'traite'    => '🟢 Traité',
                            'archive'   => '⚫ Archivé',
                        ])
                        ->default('non_lu')
                        ->required(),

                    Forms\Components\Toggle::make('is_read')
                        ->label('Marqué comme lu')
                        ->helperText('Cochez une fois que vous avez traité cette demande.'),

                    Forms\Components\Textarea::make('notes_internes')
                        ->label('📝 Notes internes (privées)')
                        ->helperText('Ces notes ne sont visibles que par vous dans le panel admin.')
                        ->rows(4)
                        ->columnSpanFull()
                        ->placeholder('Ex: Client contacté le 18/04/2026 par WhatsApp. Intéressé par forfait Premium...'),
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

            Infolists\Components\Section::make('Suivi')
                ->icon('heroicon-o-check-circle')
                ->columns(2)
                ->schema([
                    Infolists\Components\TextEntry::make('statut')
                        ->label('Statut')
                        ->formatStateUsing(fn($state) => match ($state) {
                            'non_lu'   => '🔴 Non lu',
                            'en_cours' => '🟡 En cours de traitement',
                            'traite'   => '🟢 Traité',
                            'archive'  => '⚫ Archivé',
                            default    => '🔴 Non lu',
                        })
                        ->badge()
                        ->color(fn($state) => match ($state) {
                            'non_lu'   => 'danger',
                            'en_cours' => 'warning',
                            'traite'   => 'success',
                            'archive'  => 'gray',
                            default    => 'danger',
                        }),

                    Infolists\Components\TextEntry::make('created_at')
                        ->label('Reçu le')
                        ->dateTime('d/m/Y à H:i'),

                    Infolists\Components\TextEntry::make('notes_internes')
                        ->label('📝 Notes internes')
                        ->default('Aucune note')
                        ->columnSpanFull()
                        ->color('gray'),
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
                    ->limit(30)
                    ->default('—'),

                Tables\Columns\TextColumn::make('statut')
                    ->label('Statut')
                    ->formatStateUsing(fn($state) => match ($state) {
                        'non_lu'   => '🔴 Non lu',
                        'en_cours' => '🟡 En cours',
                        'traite'   => '🟢 Traité',
                        'archive'  => '⚫ Archivé',
                        default    => '🔴 Non lu',
                    })
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'non_lu'   => 'danger',
                        'en_cours' => 'warning',
                        'traite'   => 'success',
                        'archive'  => 'gray',
                        default    => 'danger',
                    }),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Reçu le')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('statut')
                    ->label('Statut')
                    ->options([
                        'non_lu'   => '🔴 Non lu',
                        'en_cours' => '🟡 En cours',
                        'traite'   => '🟢 Traité',
                        'archive'  => '⚫ Archivé',
                    ]),

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
                Tables\Actions\Action::make('reply_email')
                    ->label('✉️ Email')
                    ->color('primary')
                    ->icon('heroicon-o-envelope')
                    ->url(fn(Contact $record) => "mailto:{$record->email}?subject=Re: Votre demande DigitSahelCloud — {$record->service}&body=Bonjour {$record->name},%0A%0AMerci pour votre message concernant : {$record->service}.%0A%0A")
                    ->openUrlInNewTab(),

                Tables\Actions\Action::make('reply_whatsapp')
                    ->label('💬 WhatsApp')
                    ->color('success')
                    ->icon('heroicon-o-chat-bubble-left')
                    ->url(fn(Contact $record) => "https://wa.me/" . preg_replace('/[^0-9]/', '', $record->phone) . "?text=Bonjour%20{$record->name},%20merci%20pour%20votre%20message%20concernant%20{$record->service}.%20Je%20suis%20Bachir%20de%20DigitSahelCloud.")
                    ->openUrlInNewTab(),

                Tables\Actions\Action::make('marquer_traite')
                    ->label('🟢 Traité')
                    ->color('success')
                    ->icon('heroicon-o-check-circle')
                    ->requiresConfirmation()
                    ->modalHeading('Marquer comme traité ?')
                    ->modalDescription('Ce message sera marqué comme traité.')
                    ->action(function (Contact $record) {
                        $record->update(['statut' => 'traite', 'is_read' => true]);
                        Notification::make()
                            ->title('✅ Message marqué comme traité')
                            ->success()
                            ->send();
                    })
                    ->visible(fn(Contact $record) => $record->statut !== 'traite'),

                Tables\Actions\ViewAction::make()->label('Voir'),
                Tables\Actions\EditAction::make()->label('Modifier'),
                Tables\Actions\DeleteAction::make()->label('Supprimer'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\BulkAction::make('marquer_lus')
                        ->label('✅ Marquer comme traités')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn($records) => $records->each->update(['statut' => 'traite', 'is_read' => true]))
                        ->requiresConfirmation(),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'view'  => Pages\ViewContact::route('/{record}'),
            'edit'  => Pages\EditContact::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('statut', 'non_lu')->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'danger';
    }
}
