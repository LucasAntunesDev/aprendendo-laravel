<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller {

    public function index() {
        $categories = Category::all();

        return view('categories', [
            'categories' => $categories
        ]);
    }

    public function create() {
        $category = new Category();

        return view('category', [
            'category' => $category
        ]);
    }

    public function edit($id) {
        $category = Category::find($id);

        return view('category', [
            'category' => $category
        ]);
    }

    public function store(Request $request) {
        
        $messages = ['title.required' => 'O campo título deve ser preenchido'];
        
        $validator = Validator::make($request->all(), [
            'title' => 'required'
        ], $messages);

        if ($validator->fails()) return redirect()->route('categorianovo')->withErrors($validator)->withInput();
        else {
            $category = new Category();
            $category->title = $request->input('title'); #$_POST['title']
            $category->save();

            return redirect()->route('categorias');
        }
    }

    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required'
        ]);

        if ($validator->fails()) return redirect()->route('categoriasnovo')->withErrors($validator)->withInput();
        else {
            $category = Category::find($id);
            $category->title = $request->input('title'); #$_POST['title']
            $category->save();

            return redirect()->route('categorias');
        }
    }

    public function destroy($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categorias');
    }
}
