<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function Category(){
        $categorys = Category::orderBy('created_at', 'desc')->paginate(5);
        return View('layouts.backend.produk.category',compact('categorys'));
    }
    public function AddCategory(){
        $categorys = Category::paginate(5);
        return View('layouts.backend.produk.add_category',compact('categorys'));
    }
    public function AddIsiCategory(Request $request)
    {
        $validate = $request->validate([
            'category_name' => 'required|unique:kategori_produk',
        ],
        [
            'category_name.required' => 'Category Produk Tidak Boleh Kosong',
            'category_name.max' => 'Category Produk maximal 50 huruf',
            'category_name.unique' => 'Category Produk Sudah Diambil ',
        ]);
    
        Category::insert([
            'category_name' => $request->category_name,
            'slug' => STr::slug($request->category_name),
            'user_id' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('users.category')->with('success', 'Category Produk Sudah Di Insert');
    }
    public function EditCategory($id){
        $category =Category::where('id', $id)->first();
        return view('layouts.backend.produk.edit_category',compact('category'));
    }
    public function UpdateCategory(Request $request,$id){
        $validate = $request->validate([
            'category_name' => 'required',
        ],
        [
            'category_name.required' => 'Category Produk Tidak Boleh Kosong',
            'category_name.max' => 'Category Produk maximal 50 huruf',
        ]);

            Category::find($id)->update([
                'category_name' => $request->category_name,
                'updated_at' => Carbon::now(),
                'slug' => STr::slug($request->category_name),
            ]);
        
            return redirect()->route('users.category')->with('success', 'Category Produk Sudah Di Update');
        }

      
    
    public function DelCategory($id){
        $image = Category::find($id);
        Category::find($id)->delete();
        return redirect()->back()->with('success',' Category Produk sudah berhasil dihapus');
}
}
