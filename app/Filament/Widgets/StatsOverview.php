<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Category', Category::count())
                ->color('success')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => 'redirectToCategories'
                ]),
            Card::make('Total Post', Post::count())
                ->color('success')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => 'redirectToPosts'
                ]),
        ];
    }

    public function redirectToCategories()
    {
        redirect()->to(route('filament.resources.categories.index'));
    }

    public function redirectToPosts()
    {
        redirect()->to(route('filament.resources.posts.index'));
    }
}
