<!DOCTYPE html 5>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de produtos</title>
    <link rel="icon" type="image/png" href="./favicon.svg">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="scroll-smooth bg-zinc-50 dark:bg-slate-900 text-slate-950 dark:text-zinc-50">
    @include('includes.menu')
    <!-- <main class="w-screen flex justify-center items-center"> -->
    @yield('content')
    @include('includes.footer')
</body>

</html>