<?php

namespace App\Domains\Inventory\Controllers;

use App\Domains\Inventory\Actions\CreateCategoryAction;
use App\Domains\Inventory\DataTransferObjects\CategoryDTO;
use App\Http\Controller;
use Illuminate\Http\Request;
use function response;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['sometimes', 'string', 'max:255'],
            'parent_uuid' => ['sometimes', 'exists:categories,uuid'],
        ]);

        $category = (new CreateCategoryAction(CategoryDTO::fromRequest($request)))();

        return response()->json($category);
    }
}
