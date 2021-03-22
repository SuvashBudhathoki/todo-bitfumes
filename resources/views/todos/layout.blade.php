<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    @livewireStyles
    <title>Todos</title>
</head>
<body>
    <div class="text-center flex justify-center pt-10">
        <div class="w-1/3 border border-grey-400 rounded py-4">
            @yield('content')
        </div>
    </div>
    @livewireScripts
</body>
</html>

