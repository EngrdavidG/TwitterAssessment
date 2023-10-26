<?php

namespace App\Http\Controllers\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function subscribeToChatBot(Request $request)
    {
        // Get user ID and bot ID from the request
        $userId = $request->input('user_id');
        $botId = $request->input('bot_id');
        
        // Perform the subscription logic (e.g., store in a database)
        
        return response()->json(['message' => 'User subscribed to chat bot successfully']);
    }
}


// app/Http/Controllers/SubscribeController.php



