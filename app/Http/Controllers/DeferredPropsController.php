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
            'stats' => Inertia::defer(fn () => $this->getStats(), 'stats'),
            'users' => Inertia::defer(fn () => $this->getUsers(), 'users'),
        ]);
    }

    private function getStats()
    {
        sleep(2);

        return [
            ['name' => 'Total Users', 'stat' => User::count()],
            ['name' => 'Total Posts', 'stat' => Post::count()],
            ['name' => 'Orders Revenue', 'stat' => '$'.Number::abbreviate(Order::sum('total'), 2)],
        ];
    }

    private function getUsers()
    {
        sleep(4);

        return User::all()
            ->map(fn ($user) => [
                'id' => $user->getRouteKey(),
                'name' => $user->name,
                'email' => $user->email,
                'created_at' => $user->created_at->format('M d, Y'),
            ]);
    }
}
