<?php

namespace App\Filament\Resources\CondicionAlumnoResource\Pages;

use App\Filament\Resources\CondicionAlumnoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCondicionAlumno extends EditRecord
{
    protected static string $resource = CondicionAlumnoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
