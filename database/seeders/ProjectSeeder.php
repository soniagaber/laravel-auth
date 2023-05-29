<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i =0; $i<10; $i++){
            $project=new Project();

            $project->title = $faker->sentence(3);
            $project->description = $faker->text(400);
            $project->github_link = $faker->url();
            $project->slug = Str::slug( $project->title, '-');
            $project->language = $faker->word(1);
            $project->creation_date = $faker->date();
            
            
            $project->save();
        }
    }
}
