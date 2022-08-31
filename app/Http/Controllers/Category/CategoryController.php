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
            $categories = Category::all();
            return view('category.index', compact('categories'));
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
     * @return Response
     */
    public function store(): Response
    {
        try {
            $validator = Validator::make(request()->all(), [
                'category_title' => ['required', Rule::unique('categories', 'name')]
            ]);

            if ($validator->fails()) {
                return HelperModule::jsonResponse(null, $validator->errors()->first(), Constant::BadRequest);
            }
            request()->request->add(['channel_type' => 'Dashboard']);
            $category = Category::create([
                'name' => request()->category_title,
                'description' => request()->description ?? null,
                'status' => request()->status ?? "1",
                'channel_type' => request()->channel_type,
                'created_by' => auth()->user()->id ?? null,
                'updated_by' => auth()->user()->id ?? null,
            ]);
//            return redirect()->route('category.index')->with('success', 'Category created Successfully.');
            return HelperModule::jsonResponse(new CategoryResource($category), 'Category created Successfully.', Constant::OK);
        } catch (Exception $e) {
//            return redirect()->back()->with('error', $e->getMessage());
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
        try {
            $validator = Validator::make($request->all(), [
                'category_title' => ['required', Rule::unique('categories', 'name')],
                'status' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->route('category.list')->with('error', $validator->errors()->first());
            }
            $request->request->add(['channel_type' => 'Dashboard']);
            $category = Category::findOrFail($id);
            $category->update([
                'name' => $request->category_title,
                'status' => $request->status ?? 1,
                'description' => $request->description ?? null,
                'channel_type' => $request->channel_type,
                'updated_by' => auth()->user()->id ?? null,
            ]);
            return redirect()->route('category.list')
                ->with('success', 'Category Updated Successfully.');
        } catch (Exception $e) {
            return redirect()->route('category.list')
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
