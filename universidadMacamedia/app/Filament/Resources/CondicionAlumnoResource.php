<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CondicionAlumnoResource\Pages;
use App\Filament\Resources\CondicionAlumnoResource\RelationManagers;
use App\Models\Alumno;
use App\Models\CondicionAlumno;
use App\Models\Estado;
use App\Models\Materia;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\text;

class CondicionAlumnoResource extends Resource
{
    protected static ?string $model = CondicionAlumno::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Panel Docente';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('alumnoID')
                ->label('Alumno')
                ->options(Alumno::all()->pluck('nombre', 'dni'))
                ->searchable()
                ->required(),

                Select::make('materiaID')
                ->label('Materia')
                ->options(Materia::all()->pluck('nombre', 'id'))
                ->searchable()
                ->required(),

                Select::make('estadoID')
                ->label('Estado')
                ->options(Estado::all()->pluck('descripcion', 'id'))
                ->required(),

                DatePicker::make('fecha')
                ->required()
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('condicionAlumno.nombre')
                ->label('Alumno'),

                TextColumn::make('condicionMateria.nombre')
                ->label('Materia'),

                TextColumn::make('condicionEstado.descripcion')
                ->label('Estado'),

                TextColumn::make('fecha')
                ->label('Fecha')
                ->dateTime('d-M-Y')
            
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCondicionAlumnos::route('/'),
            'create' => Pages\CreateCondicionAlumno::route('/create'),
            'edit' => Pages\EditCondicionAlumno::route('/{record}/edit'),
        ];
    }    
}
