<?php

namespace App\Filament\Resources\UserLessonResource\Pages;

use App\Filament\Resources\UserLessonResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserLesson extends CreateRecord
{
    protected static string $resource = UserLessonResource::class;
}
