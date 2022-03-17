<?php

namespace App\Domain\Manufacturing\DataTransferObjects;

use Illuminate\Http\Request;

class CategoryDTO
{
    function __construct(public string $title, public ?string $description, public ?string $parent_uuid)
    {
    }

    public static function fromRequest(Request $request)
    {
        return new self(
            title: $request->title,
            description: $request->description,
            parent_uuid: $request->parent_uuid
        );
    }
}
