<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;

class NotificationController extends Controller
{
    public function index()
    {
        // Fetch notifications for the authenticated user
        $notifications = Notification::where('user_id', auth()->id())
                                     ->orderBy('created_at', 'desc')
                                     ->get();
        return view('notifications.index', compact('notifications'));
    }

    public function markAsRead(Notification $notification)
    {
        // Ensure the notification belongs to the authenticated user
        if ($notification->user_id == auth()->id()) {
            $notification->read_at = now();
            $notification->save();
        }

        return redirect()->back();
    }

    public function sendNotification(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'body' => 'nullable|string',
        ]);

        // Find the user and create the notification
        $user = User::findOrFail($request->user_id);
        $notification = new Notification();
        $notification->user_id = $user->id;
        $notification->title = $request->title;
        $notification->body = $request->body;
        $notification->save();

        return redirect()->back()->with('success', 'Notification sent successfully!');
    }
}
