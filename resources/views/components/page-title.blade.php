@props(['title'])
<h2 {{ $attributes->merge(['class' => 'text-4xl']) }}>
    {{$title}}
</h2>
