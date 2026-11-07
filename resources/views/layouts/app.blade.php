<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col text-gray-800">
     @isset($username)
        <x-navbar :username="$username" />
    @endisset

    <main class="flex-1 max-w-4xl w-full mx-auto px-4 py-8">
        @yield('content')
    </main>

    <x-footer/>

</body>

</html>