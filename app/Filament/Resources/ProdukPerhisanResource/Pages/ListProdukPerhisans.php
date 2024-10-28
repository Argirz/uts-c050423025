<?php

namespace App\Filament\Resources\ProdukPerhisanResource\Pages;

use App\Filament\Resources\ProdukPerhisanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProdukPerhisans extends ListRecords
{
    protected static string $resource = ProdukPerhisanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
