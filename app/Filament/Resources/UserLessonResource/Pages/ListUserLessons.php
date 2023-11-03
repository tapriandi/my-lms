<?php

namespace App\Filament\Resources\UserLessonResource\Pages;

use App\Filament\Resources\UserLessonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserLessons extends ListRecords
{
    protected static string $resource = UserLessonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
