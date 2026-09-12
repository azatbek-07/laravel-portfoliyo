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

        Http::withoutVerifying()->post(
            'https://api.telegram.org/bot' . env('8642702929:AAHrpkh0_yOoKO87hfx-1YDvA3rT74rHGvE') . '/sendMessage',
            [
                'chat_id' => env('1280386647'),
                'text' => $text,
            ]
        );
        return back()->with(
            'success',
            'Xabaringiz muvaffaqiyatli yuborildi!'
        );
    }
}
