<?php

namespace PackageBuilde\PackageName\Resources;



use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;



use PackageBuilde\PackageName\Models\Test;
use PackageBuilde\PackageName\Resources\TestResource\Pages\CreateTest;
use PackageBuilde\PackageName\Resources\TestResource\Pages\ListTests;
use PackageBuilde\PackageName\Resources\TestResource\Pages\ViewTest;


class TestResource extends Resource
{
    protected static ?string $model = Test::class;

    protected static ?string $navigationIcon = 'heroicon-o-table';

    public static function getLabel(): string
    {
        return __('Test');
    }

    public static function getPluralLabel(): string
    {
        return __('Tests');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('Name'))->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->sortable(),

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->filters([

            ])
            ->bulkActions([])
            ->defaultSort('id', 'DESC');
    }

    protected static function getNavigationGroup(): ?string
    {
        return  parent::getNavigationGroup();
    }

    protected static function getNavigationSort(): ?int
    {
        return  parent::getNavigationSort();
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
            'index' => ListTests::route('/'),
            'create' => CreateTest::route('/create'),
            'view' =>  ViewTest::route('/{record}'),
        ];
    }
}
