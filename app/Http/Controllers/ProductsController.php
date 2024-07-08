<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products = Products::all();
    return view('product.index', ['products' => $products]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('product.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => 'required',
      'size' => 'required',
      'price' => 'required|Integer',
      'status' => 'required',
    ]);

    $products = Products::create([
      'name' => $validated['name'],
      'size' => $validated['size'],
      'price' => $validated['price'],
      'status' => $validated['status'],
    ]);

    return redirect()
      ->route('products.index')
      ->with('alert', 'Product Created Successfully');
  }

  /**
   * Display the specified resource.
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id)
  {
    $product = Products::findOrFail($id);
    return view('product.edit', ['product' => $product]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $id)
  {
    $product = Products::findOrFail($id);

    $validated = $request->validate([
      'name' => 'required',
      'size' => 'required',
      'price' => 'required|Integer',
      'status' => 'required',
    ]);

    $product->update([
      'name' => $validated['name'],
      'size' => $validated['size'],
      'price' => $validated['price'],
      'status' => $validated['status'],
    ]);

    return redirect()
      ->route('products.index')
      ->with('alert', 'Product Updated Successfully');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Request $request, $id)
  {
    $product = Products::findOrFail($id);
    $product->delete();
    return redirect()
      ->route('products.index')
      ->with('alert', 'Product Deleted Successfully');
  }
}
