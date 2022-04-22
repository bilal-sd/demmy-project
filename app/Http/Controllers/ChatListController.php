<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;

class ChatListController extends Controller
{
    //
    public function chat_list(){
        $chat_list = Message::get();
        
        return view('chat-list' ,compact('chat_list'));
    }
}
