<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeDB - {{ $title ?? 'Tempat untuk menemukan anime favoritmu' }}</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- You can also add custom Tailwind configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6D28D9', // purple-700
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gray-100">
    <x-layouts.header />

    <main class="container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <x-layouts.footer />
</body>
</html> 