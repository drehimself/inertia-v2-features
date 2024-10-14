<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MergingPropsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return Inertia::render('MergingProps', [
            'posts' => $this->getPosts(),
        ]);
    }

    public function getPosts()
    {
        return Post::all()
            ->map(fn ($post) => [
                'id' => $post->id,
                'title' => $post->title,
                'created_at' => $post->created_at->format('M d, Y'),
                'content' => $post->content,
            ]);
    }
}
