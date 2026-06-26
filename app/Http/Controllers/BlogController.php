<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    public function index()
    {
        $perPage = 3;
        $page = request()->input('page', 1);
        $posts = Article::where('category_id', 3)->paginate($perPage);
        $posts->setPath(request()->url());

        return view('pages.blog', [
            'posts' => $posts,
        ]);
    }
}
