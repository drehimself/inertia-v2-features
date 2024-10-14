<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LoadWhenVisibleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return Inertia::render('LoadWhenVisible', [
            'users' => Inertia::optional(fn () => $this->getUsers()),
        ]);
    }

    public function getUsers()
    {
        sleep(2);

        return User::all();
    }
}
