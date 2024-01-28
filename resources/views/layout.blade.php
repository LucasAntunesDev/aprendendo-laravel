<!DOCTYPE html 5>
<html lang="pt-BR">

@include('includes.head')

<body class="scroll-smooth bg-zinc-50 text-slate-950">
    @include('includes.menu')
    
    @yield('content')
    @include('includes.footer')
</body>

</html>