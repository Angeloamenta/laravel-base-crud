<?php

use Illuminate\Database\Seeder;
use App\comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics =
        [
         [
            "title" => "Action Comics #1000: The Deluxe Edition",
            "description" => "The celebration of 1,000 issues of Action Comics continues with a new",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
            "series" => "Action Comics",
            "author" => "Tom King",
            "price" => 19.99,
        ],
        [
            "title" => "American Vampire 1976 #1",
            "description" => "America is broken. Trust between the government and the American public ",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01",
            "series" => "American Vampire 1976",
            "author" => "Scott Snyder",
            "price" => 3.99,
        ]
       ];

       foreach ($comics as $comic) {
           $newComic = new comic();
           $newComic->title = $comic['title'];
           $newComic->description = $comic['description'];
           $newComic->thumb = $comic['thumb'];
           $newComic->series = $comic['series'];
           $newComic->author = $comic['author'];
           $newComic->price = $comic['price'];

           $newComic-> save();
       }

    }
}
