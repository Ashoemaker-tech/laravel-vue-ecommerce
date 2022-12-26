<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Request;
use App\Http\Resources\ProductListResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
       $products = Product::get()->map(function ($products) {
            return [
                'id' => $products->id,
                'title' => $products->title,
                'description' => $products->description,
                'price' => $products->price,
                'image' => $products->image,
                'featured' => $products->featured
            ];
       });
    //    TODO filter down to only featured products

        return Inertia::render('Home', [
            'products' => $products,
                ]);
    }

    public function index()
    {
       $products = Product::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('title', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn($products) => [
                'id' => $products->id,
                'title' => $products->title,
                'price' => $products->price,
                'image' => $products->image,
                'updated_at' => $products->updated_at,
                'featured' => $products->featured
                ]);
                 
                
       return Inertia::render('Dashboard/Products', [
        'products' => $products,
        'filters' => Request::only(['search'])
       ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
       return new ProductResource(Product::create($request->validated())); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show() {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->noContent();
    }
}
