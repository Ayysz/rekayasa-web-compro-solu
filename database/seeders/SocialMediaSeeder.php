<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialMedia::create([
            'name' => 'Facebook',
            'icon' => 'facebook',
            'reference_link' => 'https://www.facebook.com/',
        ]);
        SocialMedia::create([
            'name' => 'Instagram',
            'icon' => 'instagram',
            'reference_link' => 'https://www.instagram.com/',
        ]);
        SocialMedia::create([
            'name' => 'Twitter',
            'icon' => 'twitter',
            'reference_link' => 'https://www.twitter.com/',
        ]);
        SocialMedia::create([
            'name' => 'LinkedIn',
            'icon' => 'linkedin',
            'reference_link' => 'https://www.linkedin.com/',
        ]);
    }
}
