@props(['title' => '', 'description' => '', 'url' => ''])

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" class="js">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />

        <title>{{ $title }}</title>

        <meta
            name="description"
            content="{{ $description }}"
        />

        <link href="{{ $url }}" rel="canonical" />

        <meta name="twitter:card" content="summary" />
        <meta
            property="og:site_name"
            content="St. Emile Roman Catholic Church"
        />
        <meta property="og:url" content="{{ $url }}" />
        <meta property="og:title" content="St. Emile Roman Catholic Church" />

        <meta
            property="og:description"
            content="{{ $description }}"
        />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="min-h-screen flex flex-col">
        <x-nav />
        {{ $slot }}
        <x-footer />
    </body>
</html>