<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Item;
use App\Models\Jrwa_category;
use App\Models\Thread;
use App\Models\Jrwa_category_version;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Thread::factory(3)->create();
         Department::factory(1)->create();
         User::factory(5)->create();
         Item::factory(10)->create();
    }
}
