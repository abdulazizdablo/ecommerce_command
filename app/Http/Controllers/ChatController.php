<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ChatController extends Controller
{
   public function sendMessage(Request $request){
$message = [

    'content' => $request->content,
    'sent_by' => Auth::user()->name,
    'id' => Str::uuid()
];

return response()->json($message);


   }
}
