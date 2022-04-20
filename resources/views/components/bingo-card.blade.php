@props(['squares'])

@if ($squares->count() > 1)
    <div class="bg-green p-4 rounded-xl grid grid-cols-5 gap-2 max-w-3xl mx-auto">
        @foreach ($squares as $square)
            <x-bingo-square
                :square="$square"
                :loop="$loop"
            />
        @endforeach
    </div>
@endif


