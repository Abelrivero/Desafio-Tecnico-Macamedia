<?php

namespace App\Filament\Resources\CondicionAlumnoResource\Pages;

use App\Filament\Resources\CondicionAlumnoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCondicionAlumno extends CreateRecord
{
    protected static string $resource = CondicionAlumnoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
