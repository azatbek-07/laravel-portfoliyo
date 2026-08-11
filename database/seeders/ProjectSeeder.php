<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [

            [
                'title' => 'SamDU Oshxona',

                'description' => "Samarqand Davlat Universiteti oshxonasi haqida to'liq ma'lumot beruvchi zamonaviy web-sayt. Menyu, narxlar, ish vaqti va kontakt ma'lumotlari mavjud.",

                'image' => 'samdu-oshxona.png',

                'icon' => 'fa-utensils',

                'gradient' => 'from-cyan-400 to-blue-500',

                'status' => 'Yakunlangan',

                'status_color' => 'emerald',

                'techs' => [
                    'HTML5',
                    'CSS3',
                    'JavaScript',
                    'React.js',
                    'Responsive'
                ],

                'github' => 'https://github.com/azatbek-07/samdu-oshxona',

                'demo' => 'https://samdu-oshxona.netlify.app/',

                'demo_active' => true,
            ],

            [
                'title' => 'Register & Login Tizimi',

                'description' => "Foydalanuvchilarni ro'yxatdan o'tkazish va tizimga kirish uchun to'liq autentifikatsiya tizimi. Validatsiya, xavfsizlik tekshiruvlari va zamonaviy UI bilan.",

                'image' => 'login.png',

                'icon' => 'fa-lock',

                'gradient' => 'from-indigo-500 to-purple-600',

                'status' => 'Yakunlangan',

                'status_color' => 'emerald',

                'techs' => [
                    'HTML5',
                    'CSS3',
                    'JavaScript',
                    'PHP',
                    'MySQL'
                ],

                'github' => 'https://github.com/azatbek-07/forma',

                'demo' => 'https://login-reegist.netlify.app/',

                'demo_active' => true,
            ],

            [
                'title' => 'E-commerce Platform',

                'description' => "To'liq funksional onlayn-do'kon platformasi. Mahsulotlar katalogi, savat, buyurtma qilish va to'lov tizimi. Laravel va React asosida qurilmoqda.",

                'image' => 'ecommerce.jpg',

                'icon' => 'fa-shopping-cart',

                'gradient' => 'from-emerald-400 to-teal-500',

                'status' => 'Ishlab chiqilmoqda',

                'status_color' => 'amber',

                'techs' => [
                    'React.js',
                    'Laravel',
                    'Tailwind CSS',
                    'REST API'
                ],

                'github' => 'https://github.com/azatbek-07',

                'demo' => '#',

                'demo_active' => false,
            ],

            [
                'title' => 'AI Chat Assistant',

                'description' => "Sun'iy intellekt asosida ishlovchi chat assistant. Foydalanuvchilarga savollarga javob berish, tavsiyalar va yordam berish uchun mo'ljallangan.",

                'image' => 'ai-chat.jpg',

                'icon' => 'fa-robot',

                'gradient' => 'from-rose-400 to-pink-500',

                'status' => 'Ishlab chiqilmoqda',

                'status_color' => 'amber',

                'techs' => [
                    'Python',
                    'TensorFlow',
                    'NLP',
                    'React.js'
                ],

                'github' => 'https://github.com/azatbek-07',

                'demo' => '#',

                'demo_active' => false,
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}