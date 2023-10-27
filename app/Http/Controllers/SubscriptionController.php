<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        Subscription::query()
            ->create($validated);

        return JsonResource::make([
            'success' => 'Successfully subscribed to our newsletter',
        ]);
    }
}
