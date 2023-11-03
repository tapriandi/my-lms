<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserLessonResource\Pages;
use App\Filament\Resources\UserLessonResource\RelationManagers;
use App\Models\UserLesson;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserLessonResource extends Resource
{
    protected static ?string $model = UserLesson::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Lessons';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Select::make('user_id')
                        ->required()
                        ->relationship('user', 'name'),
                    Select::make('lesson_id')
                        ->required()
                        ->relationship('lesson', 'name'),
                    TextInput::make('progress')
                        ->required()
                        ->numeric()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')->rowIndex(),
                TextColumn::make('no')->sortable()
            ])
            ->filters([
                //
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
            'index' => Pages\ListUserLessons::route('/'),
            'create' => Pages\CreateUserLesson::route('/create'),
            'edit' => Pages\EditUserLesson::route('/{record}/edit'),
        ];
    }
}
