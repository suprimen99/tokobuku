<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        // $category = Category::paginate(15);
        $category = Category::all();
        return view('Admin.categories',['Category' => $category]);
    }

    public function add()
    {

       return view('Admin.category-add');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);

        $category = Category::Create($request->all());
        return redirect('categories')->with('status', 'category Added Successfully');
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('Admin.category-edit',['category' => $category]);
    }

    public function update(Request $request, $slug)
    {
        // dd($slug);
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        $category = Category::where('slug', $slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('categories')->with('status', 'category Update Successfully' );
    }

    public function delete($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('Admin.category-delete',['category' => $category]);

    }

    public function destroy($slug){
       $category = Category::where('slug',$slug)->first();
       $category->delete();
       return redirect('categories')->with('status', 'category Deleted Successfully' );
    }

    public function deletecategory()
    {
        $deletedcategory = Category::onlyTrashed()->get();
        return view('Admin.category-deleted-list',['deletedcategory'=> $deletedcategory]);
    }

    public function restore($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->restore();
        return redirect('categories')->with('status', 'category restored Successfully');
    }
}
