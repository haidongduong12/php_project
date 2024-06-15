<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;


class Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::Factory()->create([
            'name' => "Quan Tay",
            'description' => "Quan ao chat luong"
        ]);
    }
}
