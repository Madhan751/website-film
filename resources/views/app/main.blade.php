<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zonefilmku</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,200&family=Roboto+Slab:wght@300&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/css.gg/icons/icons.css" rel="stylesheet" />
    @yield('header')
</head>

<body class="bg-black relative">
    @yield('body')
    @yield('footer')
</body>

</html>
