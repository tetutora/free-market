<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('purchase.show', compact('product'));
    }

}
