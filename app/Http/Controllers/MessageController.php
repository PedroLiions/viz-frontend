<?php

namespace App\Http\Controllers;

use App\User;
use App\UserMessage;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send()
    {
        $inputs = request()->all();

        $sender = auth()->user();

        $message = new UserMessage;
        $message->recipient_user_id = $inputs['recipient_user_id'];
        $message->sender_user_id = $sender->id;
        $message->message = $inputs['message'];

        $message->save();

        return response([], 200);
    }

    public function getMessages($recipient_user_id)
    {
        $sender = auth()->user();

        $messages = UserMessage::where(function ($query) use ($sender, $recipient_user_id) {
            $query->where('sender_user_id', $sender->id);
            $query->where('recipient_user_id', $recipient_user_id);
        })->orWhere(function ($query) use ($sender, $recipient_user_id) {
            $query->where('sender_user_id', $recipient_user_id);
            $query->where('recipient_user_id', $sender->id);
        })->get();

        return $messages;
    }

    public function users()
    {
        return User::whereNotIn('id', [auth()->user()->id])->get();
    }
}
