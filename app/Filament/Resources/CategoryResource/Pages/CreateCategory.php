<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function afterCreate(): void
    {
        // Menampilkan notifikasi sukses
        Notification::make()
            ->title('Category successfully created!')
            ->success()
            ->send();

        // Redirect ke halaman index setelah data ditambahkan
        $this->redirect(CategoryResource::getUrl('index'));
    }
}
