@props(['square', 'loop'])
    <article class="rounded md:h-48
        @if ( $loop->odd === true ) {{ 'bg-yellow-light text black' }}
        @else {{ 'bg-green-light' }}
        @endif
    ">
    <a class="flex h-full w-full justify-center items-center p-1 md:p-4" href="/square/{{ $square->position }}">
        <p class="text-center text-sm md:text-2xl break-words md:break-normal">{{ $square->name }}</p>
    </a>
</article>
