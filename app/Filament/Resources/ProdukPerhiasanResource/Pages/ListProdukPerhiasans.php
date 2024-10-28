<?php

namespace App\Filament\Resources\ProdukPerhiasanResource\Pages;

use App\Filament\Resources\ProdukPerhiasanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProdukPerhiasans extends ListRecords
{
    protected static string $resource = ProdukPerhiasanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
