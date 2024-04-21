<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);

        User::create([
            'name' => 'Ahmad Hamid Balya',
            'username' => 'bal',
            'email' => 'ahmadhamidbalya@students.unnes.ac.id',
            'password' => bcrypt('12345')
        ]);
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Faizul Muna',
        //     'email' => 'faizelmuna@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, tempora! ',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quod laudantium. Veniam suscipit voluptatum delectus quisquam reiciendis harum praesentium obcaecati mollitia. Omnis modi adipisci libero cum laudantium quo ipsum iusto natus aliquam repudiandae?</p><p> Nemo fugit odit quam quod, distinctio illo corporis consequuntur fugiat debitis vitae minima eligendi inventore assumenda delectus expedita adipisci corrupti explicabo magni vero modi nostrum possimus voluptatem officia asperiores! Numquam fugiat ipsum blanditiis nemo alias sequi cum fuga ratione pariatur maiores placeat porro et rerum rem sunt, vero tempore esse laborum saepe!</p><p>Illo laboriosam ab harum, quaerat inventore veritatis iste odio provident! Laboriosam id aspernatur dignissimos, maiores veniam voluptas voluptate molestiae quidem aliquam omnis? Sit molestiae dolor alias nihil esse voluptatum repellat architecto, quos quae possimus delectus sapiente saepe error nostrum soluta velit ad, nulla culpa? Fuga ratione, quis aspernatur necessitatibus libero, itaque porro pariatur quisquam excepturi consectetur reiciendis dolore ullam quidem omnis expedita quos repudiandae sed.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, tempora! ',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quod laudantium. Veniam suscipit voluptatum delectus quisquam reiciendis harum praesentium obcaecati mollitia. Omnis modi adipisci libero cum laudantium quo ipsum iusto natus aliquam repudiandae?</p><p> Nemo fugit odit quam quod, distinctio illo corporis consequuntur fugiat debitis vitae minima eligendi inventore assumenda delectus expedita adipisci corrupti explicabo magni vero modi nostrum possimus voluptatem officia asperiores! Numquam fugiat ipsum blanditiis nemo alias sequi cum fuga ratione pariatur maiores placeat porro et rerum rem sunt, vero tempore esse laborum saepe!</p><p>Illo laboriosam ab harum, quaerat inventore veritatis iste odio provident! Laboriosam id aspernatur dignissimos, maiores veniam voluptas voluptate molestiae quidem aliquam omnis? Sit molestiae dolor alias nihil esse voluptatum repellat architecto, quos quae possimus delectus sapiente saepe error nostrum soluta velit ad, nulla culpa? Fuga ratione, quis aspernatur necessitatibus libero, itaque porro pariatur quisquam excepturi consectetur reiciendis dolore ullam quidem omnis expedita quos repudiandae sed.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'user_id' => 1,
        //     'category_id' => 2,
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, tempora! ',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quod laudantium. Veniam suscipit voluptatum delectus quisquam reiciendis harum praesentium obcaecati mollitia. Omnis modi adipisci libero cum laudantium quo ipsum iusto natus aliquam repudiandae?</p><p> Nemo fugit odit quam quod, distinctio illo corporis consequuntur fugiat debitis vitae minima eligendi inventore assumenda delectus expedita adipisci corrupti explicabo magni vero modi nostrum possimus voluptatem officia asperiores! Numquam fugiat ipsum blanditiis nemo alias sequi cum fuga ratione pariatur maiores placeat porro et rerum rem sunt, vero tempore esse laborum saepe!</p><p>Illo laboriosam ab harum, quaerat inventore veritatis iste odio provident! Laboriosam id aspernatur dignissimos, maiores veniam voluptas voluptate molestiae quidem aliquam omnis? Sit molestiae dolor alias nihil esse voluptatum repellat architecto, quos quae possimus delectus sapiente saepe error nostrum soluta velit ad, nulla culpa? Fuga ratione, quis aspernatur necessitatibus libero, itaque porro pariatur quisquam excepturi consectetur reiciendis dolore ullam quidem omnis expedita quos repudiandae sed.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'user_id' => 2,
        //     'category_id' => 2,
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, tempora! ',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quod laudantium. Veniam suscipit voluptatum delectus quisquam reiciendis harum praesentium obcaecati mollitia. Omnis modi adipisci libero cum laudantium quo ipsum iusto natus aliquam repudiandae?</p><p> Nemo fugit odit quam quod, distinctio illo corporis consequuntur fugiat debitis vitae minima eligendi inventore assumenda delectus expedita adipisci corrupti explicabo magni vero modi nostrum possimus voluptatem officia asperiores! Numquam fugiat ipsum blanditiis nemo alias sequi cum fuga ratione pariatur maiores placeat porro et rerum rem sunt, vero tempore esse laborum saepe!</p><p>Illo laboriosam ab harum, quaerat inventore veritatis iste odio provident! Laboriosam id aspernatur dignissimos, maiores veniam voluptas voluptate molestiae quidem aliquam omnis? Sit molestiae dolor alias nihil esse voluptatum repellat architecto, quos quae possimus delectus sapiente saepe error nostrum soluta velit ad, nulla culpa? Fuga ratione, quis aspernatur necessitatibus libero, itaque porro pariatur quisquam excepturi consectetur reiciendis dolore ullam quidem omnis expedita quos repudiandae sed.</p>'
        // ]);
    }
}
