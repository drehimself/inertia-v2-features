<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PrefetchingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return Inertia::render('Prefetching', [
            'users' => $this->getUsers(),
        ]);
    }

    private function getUsers()
    {
        return User::all();
    }
}
