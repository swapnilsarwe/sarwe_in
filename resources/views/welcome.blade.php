<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sarwe family</title>
        <meta name="description" content="Pick a door and come say hello to the Sarwe family.">

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <h1>Hi, we're the Sarwes <span class="wave" aria-hidden="true">👋</span></h1>
            <p class="subtitle">Pick a door and come say hello.</p>
        </header>

        <main class="cards">
            @foreach ($family as $person)
                <a class="card card-{{ $person['color'] }}" href="https://{{ $person['domain'] }}" target="_blank" rel="noopener">
                    <span class="avatar" aria-hidden="true">{{ $person['emoji'] }}</span>
                    <span class="name">{{ $person['name'] }}</span>
                    <span class="link">{{ $person['domain'] }} <span class="arrow" aria-hidden="true">↗</span></span>
                </a>
            @endforeach
        </main>

        <footer>&copy; Sarwe family</footer>
    </body>
</html>
