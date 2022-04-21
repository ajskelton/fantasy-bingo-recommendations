<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-slate">

    <x-header />

    <section class="container mx-auto px-6 py-8">
        {{ $slot }}
    </section>

</body>
