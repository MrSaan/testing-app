<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        $user = User::factory()->create([
            'name' => 'John Doe'
        ]); 

        Post::factory(25)->create();


        // User::truncate();
        // Category::truncate();
        // Post::truncate();


        /*
            di bawah adalah sisa-sisa latihan dbSeed
            tanpa menggunakan factory.
        */
        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'Personal'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'Work'
        // ]);

        // Category::create([
        //     'name' => 'Hobbies',
        //     'slug' => 'Hobbies'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'my Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium animi placeat, vitae natus asperiores cupiditate fugiat ipsum consectetur dolor. Non in voluptatum officiis, facere nisi modi? Repellendus adipisci fugiat omnis quis modi aut ipsum amet fugit repellat exercitationem voluptates pariatur nisi nihil, eos sit tempora. Commodi fugiat aliquam unde laboriosam? Enim, commodi vero accusantium dolorum facilis asperiores recusandae natus non deserunt laboriosam sapiente ullam voluptatibus nam. Modi iure beatae dolore obcaecati nam libero et pariatur nulla, accusamus laudantium iusto veritatis ipsum! Fugit repellat, eum consequuntur corporis hic quisquam iste aspernatur magnam, earum expedita voluptas est beatae veritatis quia assumenda inventore, illum nemo nisi voluptatum temporibus tenetur! Consectetur magnam eos accusantium consequuntur debitis quam, quia dignissimos quidem laudantium nihil ullam officiis cupiditate culpa enim aliquam deserunt asperiores necessitatibus. Unde cum exercitationem nemo reprehenderit aspernatur, corrupti asperiores numquam qui nulla facilis quam, ut, laudantium neque ducimus. Modi provident et maxime nihil totam.'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'my Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium animi placeat, vitae natus asperiores cupiditate fugiat ipsum consectetur dolor. Non in voluptatum officiis, facere nisi modi? Repellendus adipisci fugiat omnis quis modi aut ipsum amet fugit repellat exercitationem voluptates pariatur nisi nihil, eos sit tempora. Commodi fugiat aliquam unde laboriosam? Enim, commodi vero accusantium dolorum facilis asperiores recusandae natus non deserunt laboriosam sapiente ullam voluptatibus nam. Modi iure beatae dolore obcaecati nam libero et pariatur nulla, accusamus laudantium iusto veritatis ipsum! Fugit repellat, eum consequuntur corporis hic quisquam iste aspernatur magnam, earum expedita voluptas est beatae veritatis quia assumenda inventore, illum nemo nisi voluptatum temporibus tenetur! Consectetur magnam eos accusantium consequuntur debitis quam, quia dignissimos quidem laudantium nihil ullam officiis cupiditate culpa enim aliquam deserunt asperiores necessitatibus. Unde cum exercitationem nemo reprehenderit aspernatur, corrupti asperiores numquam qui nulla facilis quam, ut, laudantium neque ducimus. Modi provident et maxime nihil totam.'
        // ]);
    }
}
