<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookSquare;
use App\Models\Square;
use Database\Factories\BookSquareFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public array $books = [
        [
            'title' => '100 Years of Solitude',
            'author' => 'Gabriel Garcia Marquez',
            'squares' => [
                [ 'position' => 25, 'hard_mode' => true ]
            ]
        ],
        [
            'title' => '11/22/63',
            'author' => 'Stephen King',
            'squares' => [
                [ 'position' => 4, 'hard_mode' => true ],
                [ 'position' => 21, 'hard_mode' => true ]
            ]
        ],
        [
            'title' => 'A Brother\'s Price',
            'author' => 'Wen Spencer',
            'squares' => [
                [ 'position' => 6, 'hard_mode' => true ],
                [ 'position' => 21, 'hard_mode' => true ],
                [ 'position' => 25, 'hard_mode' => false ]
            ]
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ( $this->books as $book ) {

            $new_book = Book::factory()->create([
                'title' => $book['title']
            ]);

            foreach( $book['squares'] as $book_square ) {

                $square = Square::where('position', $book_square['position'] )->first();

                BookSquare::factory()->create([
                    'square_id' => $square->id,
                    'book_id' => $new_book->id,
                    'hard_mode' => $book_square['hard_mode']
                ]);
            }
        }
    }
}
