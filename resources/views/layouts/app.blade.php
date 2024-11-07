<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>{{config('app.name')}}</title>
</head>
<body>
    <div class="bg-green-200">
        @include('components.header')
    </div>

    <main>
        {{ $slot }}
    </main>


    @include('components.footer')
    <script src="{{ asset('assets/js/dropdown.js') }}"></script>
</body>
</html>