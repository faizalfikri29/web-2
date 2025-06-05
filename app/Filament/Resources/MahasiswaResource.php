<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Filament\Resources\MahasiswaResource\RelationManagers;
use App\Models\Mahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nama')->searchable()->sortable(),
                TextColumn::make('jurusan')->searchable(),
                TextColumn::make('jenis_kelamin')->searchable(),
                TextColumn::make('agama')->searchable(),
                TextColumn::make('status')->searchable()
            ])
            ->filters([
                //
                SelectFilter::make('agama')
                ->options([
                    'Islam' => 'islam',
                    'Kristen' => 'kristen',
                    'Hindu' => 'hindu',
                ]),
                 SelectFilter::make('jenis_kelamin')
                ->options([
                    'L' => 'Laki - laki',
                    'P' => 'Perempuan',
                ]),
                 SelectFilter::make('jurusan')
                ->options([
                    'Teknik Informatika' => 'TI',
                    'Sistem Informasi' => 'SI',
                    'Teknik Elektro' => 'TE',
                ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}
