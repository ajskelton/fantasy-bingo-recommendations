<?php $odd = $square->position % 2 !== 0 ?>
<x-layout>
    <div class="mb-8">
        <h2 class="text-4xl mb-4">{{$square->name}}</h2>
        <x-markdown>
            {{$square->description}}
        </x-markdown>
    </div>
    <table class="text-left table-fixed w-full font-normal border-green">
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
                    <td class="py-1 px-4">{{ $book->title }}</td>
                    <td class="py-1 px-4"><a href="/author/{{ $book->author->id }}">{{ $book->author->name }}</a></td>
                    <td class="py-1 px-4 flex justify-center">
                        @if ( $book->pivot->hard_mode )
                            <x-check />
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
