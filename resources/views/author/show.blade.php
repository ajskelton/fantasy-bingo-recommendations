<x-layout>
    <div class="mb-8">
        <h2 class="text-4xl mb-4">{{$author->name}}</h2>
    </div>
    <table class="text-left table-fixed w-full font-normal border-green">
        <thead>
            <tr class="bg-yellow-light border-2 border-green">
                <th class="w-7/12 py-2 px-4">Title</th>
                <th class="w-4/12 py-2 px-4">Square</th>
                <th class="w-1/12 py-2 px-4 text-center">Hard Mode</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $author->books as $book )
                <?php $book_loop = $loop; ?>
                @foreach ( $book->squares as $square )
                    <tr class="border-2 border-green
                        <?php echo $book_loop->odd ? 'bg-gray-200' : 'bg-gray-300' ?>">
                        <td class="py-1 px-4"><x-book-title :book="$book" /></td>
                        <td class="py-1 px-4"><x-square-name :square="$square" /></td>
                        <td class="py-1 px-4 flex justify-center"><x-hard-mode :pivot="$square->pivot" /></td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</x-layout>
