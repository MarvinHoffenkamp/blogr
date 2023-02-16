<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $posts = Post::latest()->paginate(10);

        return response()->view('admin.dashboard', compact('posts'));
    }
}
