<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="">

<nav class="bg-blue-300 h-150">
    <a class="mr-4" href="/">Welcome</a>
    <a class="mr-4" href="/contact">Contact</a>
</nav>

<main>
    {{ $slot }}
</main>

<footer class="bg-red-400 flex flex-row gap-10">
    <p>Dit is de footer</p>
    <p>Tweede kolom</p>

</footer>
</body>
