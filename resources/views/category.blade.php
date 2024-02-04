@extends('layout')
@section('content')
<div class="flex w-screen">
    <div>
        @if($errors->any())
        <div class="flex justify-center items-center">
            <div>
                <div class="bg-red-50 text-red-700 px-20 py-1 rounded-md mt-4">
                    <ul>
                        <div class="inline-flex gap-x-2 items-center font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z" clip-rule="evenodd" />
                            </svg>
                            Foram encontrados os seguintes erros:
                        </div>
                        @foreach($errors->all() as $error)
                        <li class="list-disc">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endif

        @if($category->id)
        <form action="{{ route('categoriaupdate', ['id' =>$category->id]) }}" method="POST" class="flex flex-col justify-center items-center gap-2 w-screen">
            <input type="hidden" name="_method" value="PUT">
            @else
            <form action="{{ route('categoriainsert') }}" method="POST" class="flex flex-col justify-center items-center gap-2 w-screen">
                @endif
                {{ csrf_field()}}
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div>
                    <div>
                        <label for="title" class="block text-sm font-semibold leading-6 mb-2">Título</label>
                        <div class="relative">
                            <input type="text" id="title" name="title" value="{{ $category->title }}" class="rounded-md border-0 py-1.5
                                  pr-2 pl-10 ring-1 ring-inset focus:ring-2 focus:ring-inset 
                                  outline-none text-slate-900 bg-zinc-50 ring-slate-300">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-50">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-x-2">
                        <a href="{{ route('categorias')}}" class="rounded-md py-1 px-4 focus:bg-slate-50
                         flex items-center mt-4 gap-x-2 justify-center focus:text-red-500
                         focus:border-red-500 transition duration-300 ease-in-out
                        hover:text-red-600 hover:border-red-600">
                            Cancelar
                        </a>

                        <button type="submit" class="bg-emerald-500 rounded-md py-1 px-4
                        text-slate-50 flex items-center mt-4 gap-x-2 justify-center
                         focus:outline-emerald-500 focus:outline-2 focus:border-emerald-500 transition duration-300 ease-in-out
                        hover:bg-emerald-600 hover:border-emerald-600">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection