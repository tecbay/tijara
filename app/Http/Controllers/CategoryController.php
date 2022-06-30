<?php

namespace App\Http\Controllers;

use App\Actions\CreateCategoryAction;
use App\Domain\Manufacturing\DataTransferObjects\CategoryDTO;
use App\Http\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @group Manufacturing
     * Retrieve all categories.
     * */
    public function index()
    {
        return response()->json(Category::all());
    }

    /**
     * @group Manufacturing
     * Create Category
     * @unauthenticated
     * @header Content-Type application/json
     *
     */
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
