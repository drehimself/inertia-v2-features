<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Number;
use Inertia\Inertia;

class PollingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $stats = [
            ['name' => 'Total Users', 'stat' => User::count()],
            ['name' => 'Total Posts', 'stat' => Post::count()],
            ['name' => 'Orders Revenue', 'stat' => '$'.Number::abbreviate(Order::sum('total'), 2)],
        ];

        return Inertia::render('Polling', [
            'stats' => $stats,
        ]);
    }
}
