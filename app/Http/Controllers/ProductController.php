<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        // $request->validate(
        //     [
        //         'code' => ['required', 'size:5'],
        //         'name' => ['required', 'string', 'max:10'],
        //         'quantity' => ['required', 'numeric', 'min:1'],
        //         'price' => ['required', 'numeric', 'min:1'],
        //         'color' => ['required', 'in:red,green,blue'],
        //         'description' => ['nullable', 'string', 'max:1000'],
        //     ],
        //     [
        //         'required' => 'A(z) :attribute mező kitöltése kötelező.',
        //         'code.size' => 'A(z) :attribute mezőnek 5 karakter hosszúnak kell lennie.',
        //     ]
        // );

        $validated = $request->validated();

        $product = new Product();
        $product->code = $validated['code'];
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->quantity = $validated['quantity'];
        $product->color = $validated['color'];
        $product->description = $validated['description'];

        // return redirect()->route('products.show', ['product' => $product]);
        return view('products.show', ['product' => $product]);
    }

    public function show(Product $product)
    {
    }
}
