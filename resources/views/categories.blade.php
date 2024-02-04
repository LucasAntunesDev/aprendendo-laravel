@extends('layout')
@section('content')
<div>
    <div class="w-screen flex flex-col items-center justify-center">
        <a href="{{ route('categorianovo')}}" class="bg-emerald-500 rounded-md py-2 px-4
            text-slate-50 flex items-center mt-4 gap-x-2 justify-center
            focus:outline-emerald-500 focus:outline-2 focus:border-emerald-500 transition duration-300 ease-in-out
            hover:bg-emerald-600 hover:border-emerald-600 font-semibold">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd"></path>
            </svg>
            Adicionar novo
        </a>

        <table class="table-auto text-slate-950 dark:text-zinc-50 font-medium mt-8 rounded">
            <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 text-sky-500 
            bg-slate-100 dark:bg-slate-800 rounded">
                <tr class="table-row">
                    <th class="w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col">ID</th>
                    <th class="w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col">Título</th>
                    <th class="w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col">Ações</th>
                </tr>
            </thead>

            @foreach($categories as $category)
            <tr class="even:bg-slate-100 dark:even:bg-slate-950/15 *:w-fit *:capitalize pl-2 *:pr-6 *:py-3 *:whitespace-nowrap">
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td class="flex pl-2 pr-1 w-fit py-5 flex-nowrap gap-x-2">
                    <form method="POST" action="{{ route('categoriadelete', ['id'=> $category->id]) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field()}}
                        <a href="{{ route('categoriaform', ['id' => $category->id]) }}" class="bg-emerald-500 rounded-full py-1 px-4 focus:bg-slate-50
                    text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-emerald-500 focus:text-emerald-500 focus:border-emerald-500 transition duration-300 ease-in-out
                    hover:bg-emerald-600 hover:border-emerald-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z"></path>
                            </svg>
                        </a>
                        <button type="submit" class="bg-red-500 rounded-full py-1 px-4 focus:bg-slate-50
                        text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-red-500 focus:text-red-500 focus:border-red-500 transition duration-300 ease-in-out
                        hover:bg-red-600 hover:border-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection