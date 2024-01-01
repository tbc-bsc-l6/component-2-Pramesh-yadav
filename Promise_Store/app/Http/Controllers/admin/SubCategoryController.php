<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory; // Make sure to include the SubCategory model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{


    public function index(Request $request){ 
        $subCategories = SubCategory::select('sub_categories.*','categories.name as categoryName')->latest('sub_categories.id')->leftJoin('categories','categories.id','sub_categories.category_id');
        if(!empty ($request->get('keyword'))) {
            $subCategories = $subCategories->where('sub_categories.name','like','%'.$request->get('keyword').'%');
            $subCategories = $subCategories->orwhere('categories.name','like','%'.$request->get('keyword').'%');

        }
        
        $subCategories = $subCategories->paginate(10);
        return view('admin.sub_category.list',compact('subCategories'));
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
            $subCategory->name = $request->name; // Use $request->name instead of request->name
            $subCategory->slug = $request->slug; // Use $request->slug instead of request->slug
            $subCategory->status = $request->status; // Use $request->status instead of request->status
            $subCategory->category_id = $request->category;
            $subCategory->save();

            $request->session()->flash('success','SubCategories Added Successfully');

            return response()->json([
                'status' => true,
                'message' => 'SubCategories Added Successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ]);
        }
    }
}
