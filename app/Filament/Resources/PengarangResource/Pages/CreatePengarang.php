<?php

namespace App\Filament\Resources\PengarangResource\Pages;

use App\Filament\Resources\PengarangResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePengarang extends CreateRecord
{
    protected static string $resource = PengarangResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
