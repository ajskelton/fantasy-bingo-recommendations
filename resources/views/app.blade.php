<x-layout>

    @if ($squares->count())
        <x-bingo-card :squares="$squares" />
    @else
        <p>No squares yet.</p>
    @endif

</x-layout>
