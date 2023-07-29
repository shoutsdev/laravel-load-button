<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $posts = Post::paginate(3);

        if ($request->ajax()) {
            $view = view('data', compact('posts'))->render();

            return response()->json(['html' => $view]);
        }

        return view('posts', compact('posts'));
    }
}
