<?php

namespace Database\Seeders;

use App\Models\Square;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SquareSeeder extends Seeder
{
    public array $squares = [
        [ 'position' => 1, 'name' => 'LGBTQIA List', 'description' => "**A Book from** [r/Fantasy](https://www.reddit.com/r/Fantasy/)'s **Top LGBTQIA List:** Any [book on this list](https://www.reddit.com/r/Fantasy/comments/ifmx04/rfantasys_2020_top_lgbtqa_books_voting_results/), including sequels. **HARD MODE**: A book or series that received ten votes or less." ],
        [ 'position' => 2, 'name' => 'Weird Ecology', 'description' => 'Story takes place in a world that is wildly different from our own and includes such things as unique environments, strange flora and fauna, unusual ecosystems, etc. The difference in environment, flora and fauna, and ecosystems cannot simply be “it’s a fantasy world,” but something that is fundamentally different about the world itself. Example: The Bone Ships by RJ Barker counts as this is a poisonous world without trees and the world had to evolve in significantly different ways to deal with that. Meanwhile The Liveship Traders by Robin Hobb would not count, as it is fairly close to our own world’s ecology just with the added presence of dragons. **HARD MODE**: Not written by Jeff VanderMeer or China Miéville.' ],
        [ 'position' => 3, 'name' => 'Two or More Authors', ],
        [ 'position' => 4, 'name' => 'Historical SFF', ],
        [ 'position' => 5, 'name' => 'Set in Space', ],
        [ 'position' => 6, 'name' => 'Anti-Hero', ],
        [ 'position' => 7, 'name' => 'Standalone', ],
        [ 'position' => 8, 'name' => 'Book Club or Readalong Book', ],
        [ 'position' => 9, 'name' => 'Cool Weapon', ],
        [ 'position' => 10, 'name' => 'Revolutions and Rebellions', ],
        [ 'position' => 11, 'name' => 'Name in the Title', ],
        [ 'position' => 12, 'name' => 'Author Uses Initial', ],
        [ 'position' => 13, 'name' => 'Published in 2022', ],
        [ 'position' => 14, 'name' => 'Urban Fantasy', ],
        [ 'position' => 15, 'name' => 'Set in Africa', ],
        [ 'position' => 16, 'name' => 'Non-Human Protagonist', ],
        [ 'position' => 17, 'name' => 'Wibbly Wobbly Timey Wimey', ],
        [ 'position' => 18, 'name' => 'Five SFF Short Stories', ],
        [ 'position' => 19, 'name' => 'Features Mental Health', ],
        [ 'position' => 20, 'name' => 'Self-Published OR Indie Publisher', ],
        [ 'position' => 21, 'name' => 'Award Finalist, But not Won', ],
        [ 'position' => 22, 'name' => 'BIPOC Author', ],
        [ 'position' => 23, 'name' => 'Shapeshifters', ],
        [ 'position' => 24, 'name' => 'No Ifs, Ands, or Buts', ],
        [ 'position' => 25, 'name' => 'Family Matters', ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach( $this->squares as $square ) {
            Square::factory()->create([
                'name' => $square['name'],
                'position' => $square['position']
            ]);
        }
    }
}
