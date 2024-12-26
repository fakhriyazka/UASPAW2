<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Products; 

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $products = Products::latest()->paginate(10);

        //render view with products
        return view('products.index', compact('products'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'product_name'         => 'required',
            'price'         => 'required|numeric',
        ]);

        Products::create([
            'product_name'         => $request->product_name,
            'price'         => $request->price,
        ]);

        //redirect to index
        return redirect()->route('products')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get product by ID
        $products = Products::findOrFail($id);

        //render view with product
        return view('products.show', compact('products'));
    }
    
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get product by ID
        $products = Products::findOrFail($id);

        //render view with product
        return view('products.edit', compact('products'));
    }
        
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'product_name'         => 'required',
            'price'         => 'required|numeric',
        ]);

        //get product by ID
        $products = Products::findOrFail($id);

            //update product with new image
            $products->update([
            'product_name'         => $request->product_name,
            'price'         => $request->price,
            ]);

        //redirect to index
        return redirect()->route('products')->with(['success' => 'Data Berhasil Diubah!']);
    }
        /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $products = Products::findOrFail($id);

        //delete product
        $products->delete();

        //redirect to index
        return redirect()->route('products')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}