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
        Project::truncate();

        $projects = [
            [
                'title' => "ZehnGo — Gamified Ta'lim Platformasi",
                'description' => "O'quvchilar va o'qituvchilar uchun gamifikatsiyalashgan zamonaviy ta'lim va onlayn test platformasi. Fanlar bo'yicha interaktiv testlar, reyting (leaderboard), XP ballar tizimi hamda Admin, O'qituvchi va O'quvchi panellari mavjud.",
                'image' => 'zehngo.svg',
                'icon' => 'brain',
                'gradient' => 'from-blue-600 to-indigo-600',
                'status' => 'Yakunlangan',
                'status_color' => 'emerald',
                'techs' => [
                    'Laravel',
                    'PHP',
                    'MySQL',
                    'Tailwind CSS',
                    'JavaScript',
                ],
                'github' => 'https://github.com/azatbek-07/zehngo-laravel',
                'demo' => 'https://zehngo.azatbek.uz',
                'demo_active' => true,
            ],
            [
                'title' => 'Rasm Converter Bot v2.0',
                'description' => "Rasmlarni soniyalar ichida A4 formatdagi PDF va Microsoft Word (DOCX) hujjatga aylantiruvchi hamda sifatni saqlagan holda PDF hajmini 3–5 barobar kichraytiruvchi Telegram bot (@word_pdf7_bot) va monitoring web-platformasi.",
                'image' => 'rasm-converter-bot.svg',
                'icon' => 'file-text',
                'gradient' => 'from-cyan-500 to-blue-600',
                'status' => 'Yakunlangan',
                'status_color' => 'emerald',
                'techs' => [
                    'Laravel',
                    'PHP',
                    'Telegram Bot API',
                    'DomPDF',
                    'PhpWord',
                ],
                'github' => 'https://github.com/azatbek-07/rasm-converter-bot',
                'demo' => 'https://bot.azatbek.uz',
                'demo_active' => true,
            ],
            [
                'title' => 'FreelanceHub',
                'description' => "O'zbekistondagi freelancerlar va buyurtmachilarni bog'lovchi zamonaviy freelance platforma. Professional mutaxassislarni topish, loyihalar joylashtirish va ishonchli hamkorlik qilish imkonini beradi.",
                'image' => 'freelancerhub.png',
                'icon' => 'briefcase',
                'gradient' => 'from-violet-500 to-purple-600',
                'status' => 'Yakunlangan',
                'status_color' => 'emerald',
                'techs' => [
                    'Laravel',
                    'PHP',
                    'MySQL',
                    'Tailwind CSS',
                ],
                'github' => 'https://github.com/azatbek-07/laravel-freelancer-hub',
                'demo' => '#',
                'demo_active' => false,
            ],
            [
                'title' => 'SuperMarket',
                'description' => "Zamonaviy onlayn supermarket platformasi. 5000+ mahsulot, qulay xarid qilish, aksiyalar, savat va 24/7 yetkazib berish xizmatlarini taqdim etuvchi to'liq funksional e-commerce tizim.",
                'image' => 'supermarket.png',
                'icon' => 'shopping-cart',
                'gradient' => 'from-green-500 to-emerald-600',
                'status' => 'Yakunlangan',
                'status_color' => 'emerald',
                'techs' => [
                    'Laravel',
                    'PHP',
                    'MySQL',
                    'Tailwind CSS',
                ],
                'github' => 'https://github.com/azatbek-07/supermarket-laravel',
                'demo' => '#',
                'demo_active' => false,
            ],
            [
                'title' => 'UyTop',
                'description' => "Zamonaviy uy-joy qidirish platformasi. Foydalanuvchilar o'zlariga mos uylarni joylashuvi, turi va narxi bo'yicha izlashlari, batafsil ma'lumotlarni ko'rishlari va qulay uy topishlari mumkin.",
                'image' => 'uytop.png',
                'icon' => 'home',
                'gradient' => 'from-yellow-400 to-amber-500',
                'status' => 'Yakunlangan',
                'status_color' => 'emerald',
                'techs' => [
                    'Laravel',
                    'PHP',
                    'MySQL',
                    'Tailwind CSS',
                ],
                'github' => 'https://github.com/azatbek-07/houses-website-laravel',
                'demo' => '#',
                'demo_active' => false,
            ],
            [
                'title' => 'FitLife',
                'description' => "Sog'lom turmush tarzini qo'llab-quvvatlash uchun yaratilgan zamonaviy fitness platformasi. Professional trenerlar, mashg'ulotlar va foydali xizmatlar orqali foydalanuvchilarga o'z maqsadlariga erishishda yordam beradi.",
                'image' => 'fitlife.png',
                'icon' => 'dumbbell',
                'gradient' => 'from-orange-500 to-red-500',
                'status' => 'Yakunlangan',
                'status_color' => 'emerald',
                'techs' => [
                    'Laravel',
                    'PHP',
                    'MySQL',
                    'Tailwind CSS',
                ],
                'github' => 'https://github.com/azatbek-07/laravel-fitnes-website',
                'demo' => '#',
                'demo_active' => false,
            ],
            [
                'title' => 'SamDU Oshxona',
                'description' => "Samarqand Davlat Universiteti oshxonasi haqida to'liq ma'lumot beruvchi zamonaviy web-sayt. Menyu, narxlar, ish vaqti va kontakt ma'lumotlari mavjud.",
                'image' => 'samdu-oshxona.png',
                'icon' => 'utensils',
                'gradient' => 'from-cyan-400 to-blue-500',
                'status' => 'Yakunlangan',
                'status_color' => 'emerald',
                'techs' => [
                    'HTML5',
                    'CSS3',
                    'JavaScript',
                    'React.js',
                    'Responsive',
                ],
                'github' => 'https://github.com/azatbek-07/samdu-oshxona',
                'demo' => 'https://samdu-oshxona.netlify.app/',
                'demo_active' => true,
            ],
            [
                'title' => 'Register & Login Tizimi',
                'description' => "Foydalanuvchilarni ro'yxatdan o'tkazish va tizimga kirish uchun to'liq autentifikatsiya tizimi. Validatsiya, xavfsizlik tekshiruvlari va zamonaviy UI bilan.",
                'image' => 'login.png',
                'icon' => 'lock',
                'gradient' => 'from-indigo-500 to-purple-600',
                'status' => 'Yakunlangan',
                'status_color' => 'emerald',
                'techs' => [
                    'HTML5',
                    'CSS3',
                    'JavaScript',
                    'Tailwind CSS',
                ],
                'github' => 'https://github.com/azatbek-07/forma',
                'demo' => 'https://login-reegist.netlify.app/',
                'demo_active' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
