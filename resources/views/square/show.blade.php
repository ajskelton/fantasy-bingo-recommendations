<?php $odd = $square->position % 2 !== 0 ?>
<x-layout>
    <div class="c-heading mb-8">
        <x-page-title :title="$square->name" />
        <x-page-subtitle subtitle="Bingo Square [{{$square->position}}]" />
        <div class="w-full lg:w-3/4">
        <x-markdown>
            {{$square->description}}
        </x-markdown>
        </div>
    </div>
    <table class="text-left lg:table-fixed w-full font-normal border-green">
        <thead>
            <tr class="bg-yellow-light border-2 border-green">
                <th class="w-7/12 py-2 px-4">Title</th>
                <th class="w-4/12 py-2 px-4">Author</th>
                <th class="w-1/12 py-2 px-4 text-center">Hard Mode</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $square->books as $book )
                <tr class="border-2 border-green
                    <?php echo $loop->odd ? 'bg-gray-200' : 'bg-gray-300' ?>">
                    <td class="py-1 px-4"><x-book-title :book="$book" /></td>
                    <td class="py-1 px-4"><x-author-name :book="$book" /></td>
                    <td class="py-1 px-4 flex justify-center"><x-hard-mode :pivot="$book->pivot" /></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
