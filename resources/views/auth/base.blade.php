<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen w-full flex flex-col items-center justify-center bg-gradient-to-tr from-primary-base to-primary-light">
        <div class="flex flex-col rounded border border-solid border-white p-4 w-[240px]">
            @yield('content')
        </div>
    </div>
</body>
</html>