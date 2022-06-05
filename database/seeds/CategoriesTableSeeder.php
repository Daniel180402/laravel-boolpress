<?php
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Model\Post;
use App\User;
use App\UserInfo;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = ['food', 'travel', 'holiday', 'tech', 'mannaggia', 'politics', 'adventure'];
        for ($i=0; $i < count($categories) ; $i++) {
            $newCategory = new Category();
            $newCategory->name = $categories[$i];
            $newCategory->color = $faker->unique()->hexColor();
            $newCategory->save();
        }
    }
}
