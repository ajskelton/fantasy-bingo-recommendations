@section('title') {{ 'All Recommended Books' }} @endsection
<x-layout>
    <div class="mb-8">
        <x-page-title title="All Books" class="mb-5"/>
        <table class="text-left table-fixed w-full font-normal border-green">
            <thead>
            <tr class="bg-yellow-light border-2 border-green">
                <th class="w-7/12 py-2 px-4">Title</th>
                <th class="w-7/12 py-2 px-4">Author</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $books as $book )
                <tr class="border-2 border-green
                        <?php echo $loop->odd ? 'bg-gray-200' : 'bg-gray-300' ?>">
                    <td class="py-1 px-4"><x-book-title :book="$book" /></td>
                    <td class="py-1 px-4"><x-author-name :author="$book->author" /></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
