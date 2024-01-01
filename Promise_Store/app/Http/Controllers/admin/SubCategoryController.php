<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory; // Make sure to include the SubCategory model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\returnSelf;

class SubCategoryController extends Controller
{
    public function index(Request $request) {
        $subCategories = SubCategory::select('sub_categories.*', 'categories.name as categoryName')
            ->latest('sub_categories.id')
            ->leftJoin('categories', 'categories.id', 'sub_categories.category_id');

        if (!empty($request->get('keyword'))) {
            $subCategories = $subCategories
                ->where('sub_categories.name', 'like', '%' . $request->get('keyword') . '%')
                ->orWhere('categories.name', 'like', '%' . $request->get('keyword') . '%');
        }

        $subCategories = $subCategories->paginate(10);
        return view('admin.sub_category.list', compact('subCategories'));
    }

    public function create() {
        $categories = Category::orderBy('name', 'ASC')->get();
        $data['categories'] = $categories;

        return view('admin.sub_category.create', $data);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required|unique:sub_categories',
            'category' => 'required',
            'status' => 'required',
        ]);

        if ($validator->passes()) {
            $subCategory = new SubCategory();
            $subCategory->name = $request->name;
            $subCategory->slug = $request->slug;
            $subCategory->status = $request->status;
            $subCategory->category_id = $request->category;
            $subCategory->save();

            $request->session()->flash('success', 'SubCategory Added Successfully');

            return response()->json([
                'status' => true,
                'message' => 'SubCategory Added Successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ]);
        }
    }

    public function edit($id, Request $request) {
        $subCategory = SubCategory::find($id);
        if (empty($subCategory)) {
            $request->session()->flash('error', 'Record not found');
            return redirect()->route('sub-categories.index');
        }

        $categories = Category::orderBy('name', 'ASC')->get();
        $data['categories'] = $categories;
        $data['subCategory'] = $subCategory;

        return view('admin.sub_category.edit', $data);
    }


    public function update($id,Request $request) {

        $subCategory = SubCategory::find($id);

        
        if (empty($subCategory)) {
            $request->session()->flash('error', 'Record not found');
            return response([
                'status' => false,
                'notFound' => true
                ]);
            //return redirect()->route('sub-categories.index');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            //'slug' => 'required|unique:sub_categories',
            'slug' => 'required|unique:sub_categories,slug,'.$subCategory->id.',id',

            'category' => 'required',
            'status' => 'required',
        ]);

        if ($validator->passes()) {
            $subCategory->name = $request->name;
            $subCategory->slug = $request->slug;
            $subCategory->status = $request->status;
            $subCategory->category_id = $request->category;
            $subCategory->save();

            $request->session()->flash('success', 'SubCategory Updated Successfully');

            return response()->json([
                'status' => true,
                'message' => 'SubCategory Updated Successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ]);
        }
    }

public function destroy($id, Request $request) {
    $subCategory = SubCategory::find($id);

    if (!$subCategory) {
        $request->session()->flash('error', 'Records Not Found');
        return response([
            'status' => false,
            'notFound' => true
        ]);
    }


    $subCategory->delete();

    $request->session()->flash('success', 'SubCategory Deleted Successfully');

    return response([
        'status' => true,
        'message' => 'SubCategory Deleted Successfully'
    ]);
}

}
