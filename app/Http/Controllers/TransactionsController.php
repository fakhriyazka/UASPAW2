<?php

namespace App\Http\Controllers;

use App\Models\Transactions; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Products;



class TransactionsController extends Controller
{
    
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        $transactions = Transactions::latest()->paginate(10);

        return view('transactions.index', compact('transactions'));
    }
    public function create(): View
    {
        $products = Products::all();
        return view('transactions.create', compact(['products']));
    }
    
    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request);
        //validate form
        $request->validate([
            'customer_name' => 'required',
            'product_id'    => 'required',
            'quantity'      => 'required',
            'status'        => 'required|numeric',

        ]);

        $product = Products::where('id', $request->product_id)->first();

        //create product
        Transactions::create([
            'customer_name'         => $request->customer_name,
            'product_id'   => $request->product_id,
            'total_price'         => $request->quantity*$product->price,
            'quantity'         => $request->quantity,
            'status'         => $request->status,
            'created_by'    => 1,
            // 'created_by'    => App\Http\Controllers\Auth::user()->id,
        ]);

        //redirect to index
        return redirect()->route('transactions.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $transactions = Transactions::findOrFail($id);

        //render view with product
        $products = Products::all();
        return view('transactions.edit', compact('transactions'), compact('products'));
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
            'customer_name' => 'required',
            'product_id'    => 'required',
            'quantity'      => 'required',
            'status'        => 'required|numeric',
        ]);

        //get product by ID
        $transactions = Transactions::findOrFail($id);

        $product = Products::where('id', $request->product_id)->first();

              $transactions->update([
                'customer_name'         => $request->customer_name,
                'product_id'   => $request->product_id,
                'total_price'         => $request->quantity*$product->price,
                'quantity'         => $request->quantity,
                'status'         => $request->status,
                'created_by'    => 1,
            ]);

        //redirect to index
        return redirect()->route('transactions.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function showTransactionsForm()
    {
        return view('transactions.form');
    }

    public function getTransactionsById(Request $request)
    {
        $transactions = Transactions::find($request->input('transactions_id'));

        if (!$transactions) {
            return redirect()->back()->with('error', 'Transactions not found.');
        }

        return view('transactions.show', compact('transactions'));
    }
}

