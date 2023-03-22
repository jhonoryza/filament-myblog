<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\StatsOverview;
use Closure;
use Filament\Facades\Filament;
use Filament\Pages\Page;
use Filament\Widgets\StatsOverviewWidget;
use Illuminate\Support\Facades\Route;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';

    protected static ?int $navigationSort = -2;

    protected static function getNavigationLabel(): string
    {
        return 'Dashboard';
    }

    public static function getRoutes(): Closure
    {
        return function () {
            Route::get('/', static::class)->name(static::getSlug());
        };
    }

    protected function getWidgets(): array
    {
        return [
            StatsOverview::class
        ];
    }

    protected function getColumns(): int | array
    {
        return 2;
    }

    protected function getTitle(): string
    {
        return 'Dashboard';
    }
}
