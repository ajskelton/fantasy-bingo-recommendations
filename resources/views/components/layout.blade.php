<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-slate">

    <header class="container mx-auto p-4">
        <img src="{{ asset('images/2020-fantasy-bingo-banner.png') }}"
             alt="A Banner with the text r/fantasy presents 2022 bingo card" class="mx-auto">
    </header>

    <section class="container mx-auto px-6 py-8">
        {{ $slot }}
    </section>

</body>
