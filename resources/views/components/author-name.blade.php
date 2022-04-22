@props(['book'])
<a href="/author/{{ $book->author->id }}">{{ $book->author->name }}</a>
