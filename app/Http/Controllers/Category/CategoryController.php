<?php

namespace App\Http\Controllers\Category;

use App\HelperModules\HelperModule;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category\Category;
use App\Utilities\Constant;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        try {
            $categoriesData = Category::whereNull('parent_id')->get();
            return view('category.index', compact('categoriesData'));
        } catch (Exception $e) {
            return redirect()->route('category.list')
                ->with('error', $e->getMessage());
        }

    }

    public function create()
    {
        return view('category.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function store(Request $request)
    {
        try {
            if (empty($request->parent_id)) {
                $validator = Validator::make(request()->all(), [
                    'category_title' => ['required', Rule::unique('categories', 'name')]
                ]);

                if ($validator->fails()) {
                    return HelperModule::jsonResponse(null, $validator->errors()->first(), Constant::BadRequest);
                }
            } else {
                $category = Category::whereId($request->parent_id)->first();
                if (empty($category)) {
                    return redirect()->route('category.list')
                        ->with('error', "Parent Category not found in our system.");
                }
            }
            $category = Category::create([
                'name' => request()->category_title,
                'parent_id' => $request->parent_id ?? null,
                'description' => request()->description ?? null,
                'status' => request()->status ?? "1",
                'channel_type' => 'Dashboard',
                'created_by' => auth()->user()->id ?? null,
                'updated_by' => auth()->user()->id ?? null,
            ]);
            if ($request->parent_id) {
                return redirect()->route('category.list')
                    ->with('success', "Child category successfully saved.");
            }
            return HelperModule::jsonResponse(new CategoryResource($category), 'Category created Successfully.', Constant::OK);
        } catch (Exception $e) {
            if ($request->parent_id) {
                return redirect()->route('category.list')
                    ->with('error', $e->getMessage());
            }
            return HelperModule::jsonResponse(null, $e->getMessage(), Constant::InternalServerError);
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $route = 'category.list';
        $message = 'Category Updated Successfully.';
        if ($request->subCat) {
            $route = 'sub.category.list';
            $message = 'Child Category Updated Successfully.';
        }
        try {
            $validator = Validator::make($request->all(), [
                'category_title' => 'required',
                'status' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->route($route)->with('error', $validator->errors()->first());
            }
            $category = Category::findOrFail($id);
            $category->update([
                'name' => $request->category_title,
                'status' => $request->status ?? 1,
                'description' => $request->description ?? null,
                'channel_type' => 'Dashboard',
                'updated_by' => auth()->user()->id ?? null,
            ]);
            return redirect()->route($route)
                ->with('success', $message);
        } catch (Exception $e) {
            return redirect()->route($route)
                ->with('error', $e->getMessage());
        }
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        try {
            Category::findOrFail($id)->delete();
            return redirect()->route('category.list')->with('success', 'Category Deleted Successfully.');
        } catch (Exception | ModelNotFoundException$e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
