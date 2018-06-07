<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Categories::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function addCategories() {
        return view('admin.categories.add');
    }

    public function addRequestCategories(Request $request) {
        try{
            $this->validate($request, [
                'title' => 'required|string|max:255',
                'description' => 'required'
            ]);
            $objCategories = new Categories();

            $objCategories = $objCategories->create([
                'title' => $request->title,
                'description' => $request->description
            ]);

            if ($objCategories){
                return back()->with('success', 'Категория добавлена');
            }
            return back()->with('error', 'Категория не добавлена');
        } catch (ValidationException $e){
            Log::error($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }

    public function editCategories($id) {
        $categori = Categories::find($id);

        if (!$categori){
            return abort(404);
        }

        return view('admin.categories.edit', ['categori' =>$categori]);
    }

    public function editRequestCategories(Request $request, $id) {
        try{
            $this->validate($request, [
                'title' => 'required|string|max:255',
                'description' => 'required'
            ]);
            $objCategories = Categories::find($id);

            if (!$objCategories){
                return abort(404);
            }

            $objCategories->title = $request->title;
            $objCategories->description = $request->description;
            $objCategories->save();

            if ($objCategories){
                return redirect()->route('categories')->with('success', 'Категория изменена');
            }
            return back()->with('error', 'Категория не изменена');
        } catch (ValidationException $e){
            Log::error($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }

    public function deleteCategories(Request $request) {
        if ($request->ajax()){
            $id = $request->id;
            Categories::where('id', $id)->delete();
        }
    }
}
