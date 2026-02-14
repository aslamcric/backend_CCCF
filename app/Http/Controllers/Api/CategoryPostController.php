<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Firefly\FilamentBlog\Models\Category;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    public function index(Request $request)
    {
        // $categories = Category::with('posts')->get();
        $categories = Category::with([
            'posts' => function ($query) {
                $query->with('tags')
                    ->where('status', 'published')
                    ->latest();
            }
        ])->get();

        // dd($categories);
        // return response()->json($categories);
        return response()->json([
            'categories' => $categories,
            'message' => 'Fetch all categories successfully',
        ], 200);
    }
}
