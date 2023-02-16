<?php

namespace App\Http\Controllers\SubCategory;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Exception;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function show($id)
    {
        $subCategories = Category::whereParentId($id)->get();
        return view('partials.categoriesPopUps.sub-category-list', compact('subCategories'));
    }
}
