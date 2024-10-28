<?php

namespace App\Filament\Resources\ProdukPerhiasanResource\Pages;

use App\Filament\Resources\ProdukPerhiasanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProdukPerhiasan extends EditRecord
{
    protected static string $resource = ProdukPerhiasanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
