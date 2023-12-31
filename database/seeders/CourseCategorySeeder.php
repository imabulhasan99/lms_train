<?php

namespace Database\Seeders;

use App\Models\Course\Category;
use App\Models\Course\CourseCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = CourseCategory::factory()->count(10)->create();
    }
}
