<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function services()
    {
        $services = Product::where('category_id', 1)->paginate(6);
        return view('pages.solution', [
            'services' => $services,
        ]);
    }
}
