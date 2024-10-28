<?php

namespace App\Filament\Resources\PembelianSupplierResource\Pages;

use App\Filament\Resources\PembelianSupplierResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPembelianSupplier extends EditRecord
{
    protected static string $resource = PembelianSupplierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
