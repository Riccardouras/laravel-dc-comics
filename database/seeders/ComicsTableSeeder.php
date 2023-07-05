<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comics;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $comics= config("comics");

       foreach ($comics as $comic) { 
        $newComic = new Comics();
        $newComic->title = $comic["title"];
        $newComic->description = $comic["description"];
        $newComic->thumb = $comic["thumb"];
        $newComic->price = floatval(str_replace('$', '', $comic['price']));
        $newComic->series = $comic["series"];
        $newComic->sale_date = $comic["sale_date"];
        $newComic->type = $comic["type"];
        $newComic->artists = $comic['artists'];
        $newComic->writers = $comic['writers'];
        $newComic->save();
    
       }
    }
}
