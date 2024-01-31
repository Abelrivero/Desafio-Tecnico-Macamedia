<?php

namespace App\Filament\Resources\CondicionAlumnoResource\Pages;

use App\Filament\Resources\CondicionAlumnoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCondicionAlumnos extends ListRecords
{
    protected static string $resource = CondicionAlumnoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
