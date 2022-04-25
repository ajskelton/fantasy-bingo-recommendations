<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookSquare;
use App\Models\Square;
use Database\Factories\BookSquareFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\fileExists;

class BookSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = storage_path( "app/public/seeders/books.csv");

        $records = $this->import_csv( $file );

        if ( !$records ) {
            return;
        }

        foreach ( $records as $book ) {

            $author = Author::firstOrCreate([
                'name' => $book['author']
            ]);

            $new_book = Book::factory()->create([
                'title' => $book['title'],
                'author_id' => $author->id,
            ]);

            unset($book['author']);
            unset($book['title']);

            foreach( $book as $square_position => $book_square ) {

                if ( empty( $book_square ) ) {
                    continue;
                }

                $hard_mode = $book_square === 'H';

                $square = Square::where('position', $square_position )->first();

                BookSquare::factory()->create([
                    'square_id' => $square->id,
                    'book_id' => $new_book->id,
                    'hard_mode' => $hard_mode,
                ]);
            }
        }
    }

    public function import_csv( $filename, $delimiter = ',' ) {
        if(!file_exists($filename) || !is_readable($filename))
            return false;
        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false){
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false){
                if(!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }
}
