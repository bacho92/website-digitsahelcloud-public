<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $total        = Contact::count();
        $nonLus       = Contact::where('is_read', false)->count();
        $entreprises  = Contact::where('demandeur_type', 'entreprise')->count();
        $particuliers = Contact::where('demandeur_type', 'particulier')->count();
        $aujourdhui   = Contact::whereDate('created_at', today())->count();
        $semaine      = Contact::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();

        return [
            Stat::make('📨 Messages totaux', $total)
                ->description('Depuis le lancement')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('primary')
                ->chart([1, 2, $total]),

            Stat::make('🔔 Non lus', $nonLus)
                ->description($nonLus > 0 ? 'En attente de réponse' : 'Tout est traité ✅')
                ->descriptionIcon('heroicon-m-bell-alert')
                ->color($nonLus > 0 ? 'warning' : 'success'),

            Stat::make('🏢 Entreprises', $entreprises)
                ->description('Demandes B2B')
                ->descriptionIcon('heroicon-m-building-office-2')
                ->color('info'),

            Stat::make('👤 Particuliers', $particuliers)
                ->description('Demandes individuelles')
                ->descriptionIcon('heroicon-m-user')
                ->color('success'),

            Stat::make('📅 Aujourd\'hui', $aujourdhui)
                ->description('Messages reçus ce jour')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('primary'),

            Stat::make('📊 Cette semaine', $semaine)
                ->description('Messages de la semaine')
                ->descriptionIcon('heroicon-m-chart-bar')
                ->color('secondary'),
        ];
    }
}
