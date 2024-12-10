<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body class=" ">
    <main class="mt-6">
        <div class=" bg-pink-500 px-2 py-2 rounded-xl">
            <div class="flex justify-center gap-5 text-3xl">
                <div class="btn bg-slate-200 rounded px-2">
                    <a href="{{route('teacher.list')}}">Teacher Protal</a>
                </div>
                <div class="btn bg-slate-200 rounded px-2">
                    <a href="{{route('show.list')}}">Student Proteal</a>
                </div>
            </div>
        </div>






    </main>
</body>

</html>
