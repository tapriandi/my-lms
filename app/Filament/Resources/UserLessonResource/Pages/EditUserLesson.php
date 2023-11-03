<?php

namespace App\Filament\Resources\UserLessonResource\Pages;

use App\Filament\Resources\UserLessonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserLesson extends EditRecord
{
    protected static string $resource = UserLessonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
