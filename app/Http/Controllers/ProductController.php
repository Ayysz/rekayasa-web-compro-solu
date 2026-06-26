<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function services()
    {
        $services = Product::all()->where('category_id', 1);
        return view('pages.solution', [
            'services' => $services,
        ]);
    }
}
