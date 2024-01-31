<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MateriaResource\Pages;
use App\Filament\Resources\MateriaResource\RelationManagers;
use App\Models\Carrera;
use App\Models\Materia;
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

use function Laravel\Prompts\text;

class MateriaResource extends Resource
{
    protected static ?string $model = Materia::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    protected static ?string $navigationGroup = 'Panel Admin';


    public static function form(Form $form): Form



    {
        return $form
            ->schema([
                TextInput::make('nombre')
                ->label('Nombre'),

                Select::make('duracion')
                ->label('Duracion')
                ->options([
                    'Anual' => 'Anual',
                    'Cuatrimestral' => 'Cuatrimestral'
                ]),

                TextInput::make('horasCursado')
                ->label('Horas de Cursado')
                ->numeric()
                ->minValue(1)
                ->maxValue(300),

                Select::make('carreraID')
                ->label('Carrera')
                ->options(Carrera::all()->pluck('nombre', 'id'))

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')
                ->label('Nombre'),

                TextColumn::make('duracion')
                ->label('Duracion'),

                TextColumn::make('horasCursado')
                ->label('Horas de Cursado'),

                TextColumn::make('carrerasMateria.nombre')
                ->label('Carrera')
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
            'index' => Pages\ListMaterias::route('/'),
            'create' => Pages\CreateMateria::route('/create'),
            'edit' => Pages\EditMateria::route('/{record}/edit'),
        ];
    }    
}
