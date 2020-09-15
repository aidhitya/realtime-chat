<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return Chat::with('user')->orderBy('created_at', 'asc')->get();
    }

    public function store(Request $request)
    {
        return Chat::create([
            'subject' => $request->subject,
            'user_id' => Auth::id()
        ]);
    }
}
