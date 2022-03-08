<?php

namespace App\Domain\Inventory\Controllers;

use App\Domain\Inventory\Actions\CreateCategoryAction;
use App\Domain\Inventory\DataTransferObjects\CategoryDTO;
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
