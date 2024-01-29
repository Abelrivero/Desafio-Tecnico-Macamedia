<?php

namespace App\Filament\Resources\AlumnoMateriaResource\Pages;

use App\Filament\Resources\AlumnoMateriaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlumnoMaterias extends ListRecords
{
    protected static string $resource = AlumnoMateriaResource::class;

    protected function getActions(): array
    {
        return [
           /*  Actions\CreateAction::make(), */
        ];
    }
}
