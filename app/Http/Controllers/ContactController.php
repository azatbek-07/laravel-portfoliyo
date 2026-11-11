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

        $name = htmlspecialchars($request->name, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($request->email, ENT_QUOTES, 'UTF-8');
        $subject = htmlspecialchars($request->subject, ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars($request->message, ENT_QUOTES, 'UTF-8');
        $time = now()->timezone('Asia/Tashkent')->format('d.m.Y | H:i');
        $locale = strtoupper(app()->getLocale());

        $text = "🔔 <b>YANGI MUROJAAT — AZATBEK.UZ</b>\n"
            . "━━━━━━━━━━━━━━━━━━\n\n"
            . "👤 <b>Ism:</b> {$name}\n"
            . "📧 <b>Email:</b> <code>{$email}</code>\n"
            . "📌 <b>Mavzu:</b> {$subject}\n"
            . "🌐 <b>Sayt tili:</b> {$locale}\n"
            . "🕒 <b>Vaqt:</b> {$time}\n\n"
            . "💬 <b>Xabar matni:</b>\n"
            . "<blockquote>{$message}</blockquote>\n\n"
            . "━━━━━━━━━━━━━━━━━━\n"
            . "🔗 <a href=\"https://azatbek.uz/contact\">azatbek.uz</a>";

        Http::post(
            'https://api.telegram.org/bot' . config('services.telegram.bot_token') . '/sendMessage',
            [
                'chat_id' => config('services.telegram.chat_id'),
                'text' => $text,
                'parse_mode' => 'HTML',
                'disable_web_page_preview' => true,
            ]
        );

        return back()->with(
            'success',
            __('contact.success')
        );
    }
}
