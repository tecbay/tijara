<?php

namespace Tests\Middleware;

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tecbay\Laramedia\Models\TemporaryMedia;
use Tests\TestCase;

class ValidateMediaMiddlewareTest extends TestCase
{
    public function testValidateMediaMiddlewareWorkProperly()
    {
        $media = TemporaryMedia::new();
        $medias = [
            'medias' => [
                $media->uuid,
                Str::uuid()->toString(),
            ],
        ];

        $query = http_build_query($medias);
        $this->postJson('/api/products?'.$query)->assertJsonValidationErrorFor('medias');

    }
}
