<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlumnoMateriaResource\Pages;
use App\Filament\Resources\AlumnoMateriaResource\RelationManagers;
use App\Models\AlumnoMateria;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlumnoMateriaResource extends Resource
{
    protected static ?string $model = AlumnoMateria::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Historico Alumno';

    protected static ?string $title = 'Historico Alumno';

    protected static ?string $navigationGroup = 'Panel Alumno';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('alumnos.nombre')
                ->label('Alumno')
                ->searchable(),

                TextColumn::make('materias.nombre')
                ->label('Materia')
                ->searchable(),

                TextColumn::make('estadoMateria.descripcion')
                ->label('Estado'),
            ])
            ->filters([
                //
            ])
            ->actions([
               /*  Tables\Actions\EditAction::make(), */
            ])
            ->bulkActions([
                /* Tables\Actions\DeleteBulkAction::make(), */
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlumnoMaterias::route('/'),
            /* 'create' => Pages\CreateAlumnoMateria::route('/create'),
            'edit' => Pages\EditAlumnoMateria::route('/{record}/edit'), */
        ];
    }    
}
