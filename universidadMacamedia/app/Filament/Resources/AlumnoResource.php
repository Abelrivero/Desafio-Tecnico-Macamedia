<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlumnoResource\Pages;
use App\Filament\Resources\AlumnoResource\RelationManagers;
use App\Models\Alumno;
use App\Models\Carrera;
use App\Models\Estado;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\select;

class AlumnoResource extends Resource
{
    protected static ?string $model = Alumno::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre')
                ->label('Nombre')
                ->required()
                ->minLength(3)
                ->maxLength(30),

                TextInput::make('apellido')
                ->label('Apellido')
                ->required()
                ->minLength(3)
                ->maxLength(30),

                TextInput::make('dni')
                ->label('DNI')
                ->required()
                ->minLength(8)
                ->unique(),

                TextInput::make('telefono')
                ->label('Telefono')
                ->tel()
                ->minLength(10)
                ->maxLength(15)
                ->required(),

                TextInput::make('numeroLegajo')
                ->label('Numero de Legajo')
                ->numeric()
                ->unique()
                ->minValue(1),

                Select::make('carreraID')
                ->label('Carrera')
                ->options(Carrera::all()->pluck('nombre', 'id')),
                
                Select::make('estadoID')
                ->label('Estado')
                ->options(Estado::all()->pluck('descripcion', 'id')),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')
                ->label('Nombre')
                ->searchable(),

                TextColumn::make('apellido')
                ->label('Apellido'),

                TextColumn::make('dni')
                ->label('DNI')
                ->searchable(), 

                TextColumn::make('telefono')
                ->label('Telefono'),

                TextColumn::make('numeroLegajo')
                ->label('Numero de Legajo')
                ->searchable(),

                TextColumn::make('carrerasAlumno.nombre')
                ->label('Carrera'),

                TextColumn::make('estadoAlumno.descripcion')
                ->label('Estado'), 
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
            'index' => Pages\ListAlumnos::route('/'),
            'create' => Pages\CreateAlumno::route('/create'),
            'edit' => Pages\EditAlumno::route('/{record}/edit'),
        ];
    }    
}
