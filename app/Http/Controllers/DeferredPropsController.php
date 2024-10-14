<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Number;
use Inertia\Inertia;

class DeferredPropsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return Inertia::render('DeferredProps', [
            'stats' => $this->getStats(),
            'users' => $this->getUsers(),
        ]);
    }

    private function getStats()
    {
        return [
            ['name' => 'Total Users', 'stat' => User::count()],
            ['name' => 'Total Posts', 'stat' => Post::count()],
            ['name' => 'Orders Revenue', 'stat' => '$'.Number::abbreviate(Order::sum('total'), 2)],
        ];
    }

    private function getUsers()
    {
        return User::all()
            ->map(fn ($user) => [
                'id' => $user->getRouteKey(),
                'name' => $user->name,
                'email' => $user->email,
                'created_at' => $user->created_at->format('M d, Y'),
            ]);
    }
}
