<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller {

    public function index() {
        $products = Product::all();
        
        $categories = Category::all();

        return view('products', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function create() {
        $product = new Product();

        $categories = Category::all();
        
        return view('product', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = Category::all();
        return view('product', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function store(Request $request) {

        $messages = [
            'category_id.required' => 'O campo categoria deve ser preenchido',
            'category_id.exists' => 'O campo categoria deve ser um registro da tabela categorias',
            'name.required' => 'O campo nome deve ser preenchido',
            'name.min' => 'O campo nome deve conter no mínimo 3 caracteres',
            'price.required' => 'O campo preço deve ser preenchido',
            'price.numeric' => 'O campo preço deve ser um valor numérico',
            'minimum_quantity.required' => 'O campo quantidade mínima para compra deve ser preenchido',
            'minimum_quantity.integer' => 'O campo quantidade mínima para compra deve ser um valor inteiro',
            'description.required' => 'O campo descrição ser preenchido'
        ];

        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'minimum_quantity' => 'required|integer',
            'description' => 'required'
        ], $messages);

        if ($validator->fails()) return redirect()->route('produtonovo')->withErrors($validator)->withInput();
        else {
            $product = new Product();
            $product->category_id = $request->input('category_id');
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->minimum_quantity = $request->input('minimum_quantity');
            $product->description = $request->input('description');
            $product->instructions = $request->input('instructions');
            $product->link_file = $request->input('link_file');
            $product->active = $request->input('active');
            $product->featured = $request->input('featured');

            if($request->file('url_image')) $product->url_image = $request->file('url_image')->store('public');
            else $product->url_image = '';
            // $product->url_image = ($request->file('url_image')) ? $request->file('url_image')->store('public') : '';

            $product->save();

            return redirect()->route('produtos');
        }
    }

    public function update($id, Request $request) {
        $messages = [
            'category_id.required' => 'O campo categoria deve ser preenchido',
            'category_id.exists' => 'O campo categoria deve ser um registro da tabela categorias',
            'name.required' => 'O campo nome deve ser preenchido',
            'name.min' => 'O campo nome deve conter no mínimo 3 caracteres',
            'price.required' => 'O campo preço deve ser preenchido',
            'price.numeric' => 'O campo preço deve ser um valor numérico',
            'minimum_quantity.required' => 'O campo quantidade mínima para compra deve ser preenchido',
            'minimum_quantity.integer' => 'O campo quantidade mínima para compra deve ser um valor inteiro',
            'description.required' => 'O campo descrição ser preenchido'
        ];

        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'minimum_quantity' => 'required|integer',
            'description' => 'required'
        ], $messages);

        if ($validator->fails()) return redirect()->route('produtonovo')->withErrors($validator)->withInput();
        else {
            $product = Product::find($id);
            $product->category_id = $request->input('category_id');
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->minimum_quantity = $request->input('minimum_quantity');
            $product->description = $request->input('description');
            $product->instructions = $request->input('instructions');
            $product->link_file = $request->input('link_file');
            $product->active = $request->input('active');
            $product->featured = $request->input('featured');
            
            if($request->file('url_image')) $product->url_image = $request->file('url_image')->store('public');

            $product->save();

            return redirect()->route('produtos');
        }
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('produtos');
    }
}
