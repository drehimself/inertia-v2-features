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
            'posts' => Inertia::merge(fn () => $this->getPosts()->items()),
            'currentPage' => $this->getPosts()->currentPage(),
            'lastPage' => $this->getPosts()->lastPage(),
        ]);
    }

    public function getPosts()
    {
        // sleep(1);

        return Post::paginate(10)
            ->through(fn ($post) => [
                'id' => $post->id,
                'title' => $post->title,
                'created_at' => $post->created_at->format('M d, Y'),
                'content' => $post->content,
            ]);
    }
}
