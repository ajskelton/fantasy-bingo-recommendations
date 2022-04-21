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
        [ 'position' => 3, 'name' => 'Two or More Authors', 'description' => 'Any book written by two or more authors such as This is How You Lose the Time War by Amal El-Mohtar and Max Gladstone. Anthologies count! **HARD MODE**: Three or more authors.' ],
        [ 'position' => 4, 'name' => 'Historical SFF', 'description' => 'Any book within the historical fantasy subgenre. **HARD MODE**: Not based in Britain or Ireland.' ],
        [ 'position' => 5, 'name' => 'Set in Space', 'description' => 'A book that takes place primarily (at least 50%) off planet. IE: on a spaceship, space station, asteroid, space whale, free floating in space, etc. **HARD MODE**: Characters are not originally from Earth. It is acceptable for the characters to be descendants of Earthlings as long as they are not themselves from Earth.' ],
        [ 'position' => 6, 'name' => 'Anti-Hero', 'description' => 'A book that is not part of a series or a larger world. No connected novellas or short stories. **HARD MODE**: Not on [r/Fantasy’s Favorite Standalones List.](https://www.reddit.com/r/Fantasy/comments/e9ukxr/the_2019_rfantasy_favourite_standalones_poll/)' ],
        [ 'position' => 7, 'name' => 'Standalone', 'description' => 'Wikipedia describes an antihero as “a character in a story who lacks conventional heroic qualities and attributes, such as idealism, courage, and morality. Although antiheroes may sometimes perform actions that are morally correct, it is not always for the right reasons, often acting primarily out of self-interest or in ways that defy conventional ethical codes.” Examples: Locke Lamora in the Gentleman Bastard series or most grimdark books. **HARD MODE**: A YA book with an anti-hero.' ],
        [ 'position' => 8, 'name' => 'Book Club or Readalong Book', 'description' => 'Any past or active [r/Fantasy](https://www.reddit.com/r/Fantasy/) book clubs count (HEA, Mod, Classics, Resident Author, Feminism in Fantasy, etc.), as well as past or active [r/Fantasy](https://www.reddit.com/r/Fantasy/) readalongs. See our [full list of book clubs here](https://www.reddit.com/r/Fantasy/wiki/index/bookclubs). NOTE: All of the current book club info can also be found on [our Goodreads page](https://www.goodreads.com/group/show/107259-r-fantasy-discussion-group). Every book added to our [Goodreads shelf](https://www.goodreads.com/group/bookshelf/107259-r-fantasy-discussion-group) or on [this Google Sheet](https://docs.google.com/spreadsheets/d/1hx_GANDZB4SFVRFkwuCR0PAMSSADIjpG-0kf5_UEKsU/) counts for this square. You can see our [past readalongs here](https://www.reddit.com/r/Fantasy/wiki/exclusives). **HARD MODE**: Must read a current selection of either a book club or readalong _and_ participate in the discussion.' ],
        [ 'position' => 9, 'name' => 'Cool Weapon', 'description' => 'At least one main character uses a weapon with magical properties. **HARD MODE**: Weapon has a unique name. Examples: Excalibur from Arthurian legend, Dragnipur in Malazan, Sting in Lord of the Rings, etc.' ],
        [ 'position' => 10, 'name' => 'Revolutions and Rebellions', 'description' => 'A book featuring a revolution. Any overthrowing of governments, monarchs, and systems will do. **HARD MODE:** Revolution/Rebellion is the main focus of the plot.' ],
        [ 'position' => 11, 'name' => 'Name in the Title', 'description' => 'A character’s first or last name appears in the title. Example: Gideon the Ninth. **HARD MODE**: The title has the character’s first _and_ last name. Example: The First Fifteen Lives of Harry August.' ],
        [ 'position' => 12, 'name' => 'Author Uses Initial', 'description' => 'Read a book by an author who goes by their initials like N. K. Jemisin or uses initials somewhere in their name like George R. R. Martin. **HARD MODE**: Initials are a pseudonym and not from the author’s actual name. Examples: T. Kingfisher or K. J. Parker. **ADDENDUM:** Please do not go snooping to see if a name fits. If it isn\'t clear based on an author\'s webpage or social media, assume that it is their real name.' ],
        [ 'position' => 13, 'name' => 'Published in 2022', 'description' => 'A book published for the first time in 2022 (no reprints or new editions). **HARD MODE**: It\'s also a debut novel--as in it\'s the author\'s first published novel.' ],
        [ 'position' => 14, 'name' => 'Urban Fantasy', 'description' => 'A subgenre of fantasy in which the narrative uses supernatural elements in a 19th-century to 21st-century urban society. Often overlaps with other subgenres like paranormal romance and superhero stories. **HARD MODE**: Book has an LGBTQ+ POV character.' ],
        [ 'position' => 15, 'name' => 'Set in Africa', 'description' => 'Book must either be set in Africa like Rosewater by Tade Thompson or in an analogous setting that is based on a real-world African setting like Raybearer by Jordan Ifueko. **HARD MODE**: Author is of African heritage.' ],
        [ 'position' => 16, 'name' => 'Non-Human Protagonist', 'description' => 'Main character must not be human or partially human. Humanoid aliens or anthropomorphic animals do count. **HARD MODE**: Non-humanoid protagonist. No elves, angels, dwarves, hobbits, or humanoid aliens.' ],
        [ 'position' => 17, 'name' => 'Wibbly Wobbly Timey Wimey', 'description' => 'Any book that deals with time not behaving as it should. Time travel, time slips, time loops, time stopping, multiple timelines, etc., all work for this square. **HARD MODE**: No time travel. Book involves something off about time that’s not necessarily time travel. Example: In The Chronicles of Narnia, time moves at a different speed in Narnia than in the real world.' ],
        [ 'position' => 18, 'name' => 'Five SFF Short Stories', 'description' => 'Any short story as long as there are five of them. **HARD MODE**: Read an entire SFF anthology or collection.' ],
        [ 'position' => 19, 'name' => 'Features Mental Health', 'description' => 'Story takes a strong interest in or explores themes like mental wellness and illness, self-care, and so on. Learn more about [the basics of mental health here](https://www.cdc.gov/mentalhealth/learn/index.htm). Here is [a list of SFF books](https://www.tor.com/2020/09/22/8-sff-books-that-center-mental-health/) that center mental health to get you started. **HARD MODE**: Not The Stormlight Archive or any books in the linked list.' ],
        [ 'position' => 20, 'name' => 'Self-Published OR Indie Publisher', 'description' => 'Self-published or published through a small, indie publisher. If the novel has been picked up by a publisher as long as you read it when it was self-pubbed it will still count. **HARD MODE**: Self-published and has fewer than 100 ratings on Goodreads, OR an indie publisher that has done an AMA with [r/Fantasy](https://www.reddit.com/r/Fantasy/).' ],
        [ 'position' => 21, 'name' => 'Award Finalist, But not Won', 'description' => 'Any book that was short-listed for an award (or multiple awards) but never received an award. You can check out this [list of SFF awards at ISFDB](http://www.isfdb.org/cgi-bin/award_directory.cgi) for inspiration. **HARD MODE**: Neither Hugo-nominated nor Nebula-nominated (check [this list](https://docs.google.com/spreadsheets/d/1K649Hvjwi4P6Ne9wNjJYFglWj0_KGp91ik2wYSH33Kk/edit?usp=sharing) for ineligible novels and novellas).' ],
        [ 'position' => 22, 'name' => 'BIPOC Author', 'description' => 'Author must be Black, Indigenous or a Person of Color. **HARD MODE**: A book written by an Indigenous author. Check out this [list of Indigenous SFF books](https://www.buzzfeednews.com/article/margaretkingsbury/native-american-heritage-month-book-recommendations) to get you started.' ],
        [ 'position' => 23, 'name' => 'Shapeshifters', 'description' => 'At least one character has the ability to change their physical form. **HARD MODE**: Most prominent shifter is not a wolf/dog shifter. For instance, werewolves can exist but can’t be the most notable shifter characters/main characters.' ],
        [ 'position' => 24, 'name' => 'No Ifs, Ands, or Buts', 'description' => 'Title does not include the following words: the, a/an, and, or, if, of, but. **HARD MODE**: Title is three words or more.' ],
        [ 'position' => 25, 'name' => 'Family Matters', 'description' => 'A book that features biological family ties. Sisters, brothers, mothers, fathers, grandparents, and children – as long as the relationship plays a part, it’s welcome for this square. **HARD MODE**: Features at least three generations in a single family.' ]
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
                'position' => $square['position'],
                'description' => $square['description'],
            ]);
        }
    }
}
