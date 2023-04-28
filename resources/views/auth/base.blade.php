<!DOCTYPE html>
<html class="h-full bg-white" lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm rounded-md p-4 w-[240px] shadow-md bg-gray-50">
            @yield('content')
        </div>
    </div>
</body>
</html>