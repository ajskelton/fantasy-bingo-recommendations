@props(['square', 'loop'])
{{--{{dd($loop->odd)}}--}}
@if ( $loop->odd === true )
    <article class="bg-yellow-light text-black rounded md:h-48 ">
@else
    <article class="bg-green-light rounded md:h-48 ">
@endif
    <a class="flex h-full w-full justify-center items-center p-1 md:p-4" href="/square/{{ $square->position }}">
        <p class="text-center text-sm md:text-2xl break-words md:break-normal">{{ $square->name }}</p>
    </a>
</article>
