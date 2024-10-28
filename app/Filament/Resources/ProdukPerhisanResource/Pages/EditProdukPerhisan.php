<?php

namespace App\Filament\Resources\ProdukPerhisanResource\Pages;

use App\Filament\Resources\ProdukPerhisanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProdukPerhisan extends EditRecord
{
    protected static string $resource = ProdukPerhisanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
