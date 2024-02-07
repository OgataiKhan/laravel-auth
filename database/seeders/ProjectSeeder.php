<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'SAMPLE Personal Portfolio Website',
                'slug' => Str::slug('Personal Portfolio Website'),
                'description' => 'A personal portfolio website to showcase my projects and skills. Built with Laravel, Vue.js, and Bootstrap.',
                'technologies' => 'Laravel, Vue.js, Bootstrap',
                'url' => 'https://exampleportfolio.com',
                'image_url' => 'https://example.com/images/portfolio1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'SAMPLE E-commerce Platform',
                'slug' => Str::slug('E-commerce Platform'),
                'description' => 'A fully functional e-commerce platform for online shopping, featuring product management, shopping cart, and order processing.',
                'technologies' => 'Laravel, Bootstrap, MySQL',
                'url' => 'https://exampleshop.com',
                'image_url' => 'https://example.com/images/shop.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'SAMPLE Task Management System',
                'slug' => Str::slug('Task Management System'),
                'description' => 'A web application for task management, allowing users to create, assign, and track tasks through a user-friendly interface.',
                'technologies' => 'Laravel, Vue.js',
                'url' => 'https://exampletasks.com',
                'image_url' => 'https://example.com/images/tasks.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
