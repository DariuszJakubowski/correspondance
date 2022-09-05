<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\File;
use App\Models\Post;
use App\Models\JrwaCategory;
use App\Models\Role;
use App\Models\Thread;
use App\Models\JrwaCategoryVersion;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Role::insert([
             ['name' => 'user'],
             ['name' => 'admin'],
             ['name' => 'dev'],
         ]);

         JrwaCategoryVersion::create(['status' => 'current']);


         JrwaCategory::factory(2)->create();
         Thread::factory(3)->create();
         Department::factory(1)->create();
         User::create([
             'first_name' => 'admin',
             'last_name' => 'admin',
             'email' => 'admin@admin.com',
             'password' => Hash::make('admin123'),
             'email_verified_at' => now(),
         ]);
         User::factory(5)->create();
         Post::factory(10)->create();
         File::factory(10)->create();

         $roles = Role::all();
         $users = User::all();
        foreach ($users as $user) {
            $user->roles()->attach($roles->random());
            $user->departments()->attach(1);
         }

    }
}
