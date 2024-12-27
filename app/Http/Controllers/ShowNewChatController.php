<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowNewChatController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        $users = User::where('id', '!=', $user->id)->get(['id', 'name']);

        return Inertia::render('Chat/New', [
            'users' => UserResource::collection($users)
        ]);

    }
}
