@props(['squares'])
{{ dump($squares) }}
@if ($squares->count() > 1)
    <div class="bg-green">
        @foreach ($squares as $square)
            <x-bingo-square
                :square="$square"
            />
        @endforeach
    </div>
@endif


