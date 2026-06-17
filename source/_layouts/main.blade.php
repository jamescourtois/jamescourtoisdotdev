<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
				<meta property="og:title" content="James Courtois - Full Stack Web Developer in St. Louis, MO">
				<meta property="og:description" content="10 years of experience in WordPress and Full Stack PHP web development. 15 total years in the creative digital space.">
				<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/jamescourtoisdotdev.png">
				<meta property="og:url" content="https://jamescourtois.dev">
				<meta property="og:type" content="website">
        <title>{{ $page->title }}</title>
        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
				<link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&display=swap" rel="stylesheet">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
				<link rel="icon" type="image/png" href="/favicon.png">
				
    </head>
    <body class="colours text-black/75 dark:text-white/75 font-sans antialiased relative">
        @yield('body')
    </body>
</html>
