<?php

namespace App\Http\Controllers;

use App\Events\NotifyUser;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendNotification(){
        event(new NotifyUser('this is a test message'));
        return response()->json(['message' => 'Notification sent successfully']);
    } 
}
