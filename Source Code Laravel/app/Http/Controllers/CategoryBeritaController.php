<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\CategoryBerita;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryBeritaController extends Controller
{
    public function CategoryBerita(){
        $categorys = CategoryBerita::orderBy('created_at', 'desc')->paginate(5);
        return View('layouts.backend.berita.category',compact('categorys'));
    }
    public function AddCategoryBerita(){
        $categorys = CategoryBerita::paginate(5);
        return View('layouts.backend.berita.add_category',compact('categorys'));
    }
    public function AddIsiCategoryBerita(Request $request)
    {
        $validate = $request->validate([
            'category_name' => 'required|unique:kategori_berita',
        ],
        [
            'category_name.required' => 'Category Berita Tidak Boleh Kosong',
            'category_name.max' => 'Category Berita maximal 50 huruf',
            'category_name.unique' => 'Category Berita Sudah Diambil ',
        ]);
    
        CategoryBerita::insert([
            'category_name' => $request->category_name,
            'slug' => STr::slug($request->category_name),
            'user_id' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->route('users.categoryberita')->with('success', 'Gambar Sudah Di Insert');
    }
    public function EditCategoryBerita($id){
        $category =CategoryBerita::where('id', $id)->first();
        return view('layouts.backend.berita.edit_category',compact('category'));
    }
    public function UpdateCategoryBerita(Request $request,$id){
        $validate = $request->validate([
            'category_name' => 'required',
        ],
        [
            'category_name.required' => 'Category Berita Tidak Boleh Kosong',
            'category_name.max' => 'Category Berita maximal 50 huruf',
        ]);

            CategoryBerita::find($id)->update([
                'category_name' => $request->category_name,
                'slug' => STr::slug($request->category_name),
                'updated_at' => Carbon::now(),
            ]);
        
            return redirect()->route('users.categoryberita')->with('success', 'Gambar Sudah Di Update');
        }

      
    
    public function DelCategoryBerita($id){
        $image = CategoryBerita::find($id);
        CategoryBerita::find($id)->delete();
        return redirect()->back()->with('success',' data sudah berhasil dihapus');
}
}
