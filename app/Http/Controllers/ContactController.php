<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact.index");
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $text = "📩 YANGI XABAR\n\n"
            . "👤 Ism: {$request->name}\n"
            . "📧 Email: {$request->email}\n"
            . "📌 Mavzu: {$request->subject}\n\n"
            . "💬 Xabar:\n{$request->message}";

        
        $response = Http::post(
    'https://api.telegram.org/bot' . config('services.telegram.bot_token') . '/sendMessage',
    [
        'chat_id' => config('services.telegram.chat_id'),
        'text' => $text,
    ]
);
        return back()->with(
            'success',
            __('contact.success')
        );
    }}
