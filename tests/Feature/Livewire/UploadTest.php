<?php

namespace Tests\Feature\Livewire;

use Tests\TestCase;
use Livewire\Livewire;
use App\Livewire\Upload;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UploadTest extends TestCase
{
    /** @test */
    public function can_upload_photo()
    {
        Storage::fake('avatars');
 
        $file = UploadedFile::fake()->image('avatar.png');
 
        Livewire::test(Upload::class)
            ->set('photo', $file)
            ->call('upload', 'uploaded-avatar.png');
 
        Storage::disk('avatars')->assertExists('uploaded-avatar.png');
    }
}
