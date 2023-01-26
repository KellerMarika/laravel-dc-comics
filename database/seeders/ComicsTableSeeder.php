<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    public function run()
    {
        $comics = config("DBcomics");
        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->series = $comic['series'];
            $newComic->type = $comic['type'];
            $newComic->price = str_replace("$", "", $comic["price"]);
            $newComic->sale_date = $comic['sale_date'];
            $newComic->artists = implode(", ",$comic["artists"]);
            $newComic->writers =  implode(", ",$comic["writers"]);
            $newComic->save();
        }
    }
}