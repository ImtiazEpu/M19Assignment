<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller {

    public function view( Request $request ) {
        // Get the logged-in user
        $user = Auth::user();

        // Fetch the posts belonging to the logged-in user
        $posts = Post::where( 'user_id', $user->id )->get();

        // Do something with the fetched posts (e.g., pass them to a view)
        return view( 'dashboard', compact( 'posts' ) );
    }

    /**
     * @param $id
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function showSingle( $id ) {
        $post = Post::with('user')->findOrFail($id);

        if ($post->user_id !== Auth::id()) {
            throw new AuthorizationException('You are not authorized to view this post.');
        }
        return view( 'single', compact( 'post' ) );
    }


}
