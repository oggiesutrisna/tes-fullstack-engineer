<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuResource\Pages;
use App\Models\Buku;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BukuResource extends Resource
{
    protected static ?string $model = Buku::class;

    protected static ?string $slug = 'bukus';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_buku')
                    ->required(),

                TextInput::make('kategori_id')
                    ->required()
                    ->integer(),

                TextInput::make('pengarang_id')
                    ->required()
                    ->integer(),

                TextInput::make('tahun')
                    ->required(),

                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->content(fn(?Buku $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->content(fn(?Buku $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_buku')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('kategori.nama_kategori')
                    ->searchable(),

                TextColumn::make('pengarang.nama_pengarang')
                    ->searchable(),

                TextColumn::make('tahun')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBukus::route('/'),
            'create' => Pages\CreateBuku::route('/create'),
            'edit' => Pages\EditBuku::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}
