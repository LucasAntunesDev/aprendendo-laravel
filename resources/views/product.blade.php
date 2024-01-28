@extends('layout')
@section('content')
<div class="flex w-screen">
    <div>
        @if($errors->any())
        <div class="flex justify-center items-center">
            <div>
                <div class="bg-red-500 px-20 py-1 text-zinc-50 rounded-md mt-4">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endif

        @if($product->id)
        <form action="{{ route('produtoupdate', ['id' =>$product->id]) }}" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center items-center gap-2 w-screen">
            <input type="hidden" name="_method" value="PUT">
            @else
            <form action="{{ route('produtoinsert') }}" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center items-center gap-2 w-screen">
                @endif
                {{ csrf_field()}}
                <div class="flex flex-col justify-center items-baseline gap-2">
                <div class="flex gap-x-4">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <div>
                        <div>
                            <label for="category_id" class="block text-sm font-medium leading-6 text-sky-500 mb-2">Categoria</label>
                            <div class="relative">
                                <select id="category_id" name="category_id" class="rounded-md border-0 py-1.5
                         pr-2 pl-10 ring-1 ring-inset focus:ring-2 focus:ring-inset 
                         outline-none text-slate-950 bg-zinc-50 ring-slate-600">
                                    <option value="-1">Selecione</option>
                                    @foreach($categories as $category)
                                    @if($product->category_id == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->title}}</option>
                                    @else
                                    <option value="{{ $category->id }}">{{ $category->title}}</option>
                                    @endif
                                    @endforeach
                                </select>

                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-50">
                                        <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-sky-500 mb-2">Nome</label>
                        <div class="relative">
                            <input type="text" id="name" name="name" value="{{ $product->name }}" class="rounded-md border-0 py-1.5
                         pr-2 pl-10 ring-1 ring-inset focus:ring-2 focus:ring-inset 
                         outline-none text-slate-950 bg-zinc-50 ring-slate-600">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-50">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                </svg>

                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="price" class="block text-sm font-medium leading-6 text-sky-500 mb-2">Preço</label>
                        <div class="relative">
                            <input type="number" min="0" step="any" id="price" name="price" value="{{ $product->price }}" class="rounded-md border-0 py-1.5
                         pr-2 pl-10 ring-1 ring-inset focus:ring-2 focus:ring-inset 
                         outline-none text-slate-950 bg-zinc-50 ring-slate-600">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-50">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex gap-x-4">
                    <div>
                        <label for="minimum_quantity" class="block text-sm font-medium leading-6 text-sky-500 mb-2">Quant. Mínima p/ compra</label>
                        <div class="relative">
                            <input type="number" min="0" id="minimum_quantity" name="minimum_quantity" value="{{ $product->minimum_quantity }}" class="rounded-md border-0 py-1.5
                         pr-2 pl-10 ring-1 ring-inset focus:ring-2 focus:ring-inset 
                         outline-none text-slate-950 bg-zinc-50 ring-slate-600">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-50">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                </svg>

                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="active" class="block text-sm font-medium leading-6 text-sky-500 mb-2">Ativo:</label>
                        <div class="relative">
                            <select id="active" name="active" class="rounded-md border-0 py-1.5
                         pr-2 pl-10 ring-1 ring-inset focus:ring-2 focus:ring-inset 
                         outline-none text-slate-950 bg-zinc-50 ring-slate-600">
                                <option value="-1">Selecione</option>
                                @if($product->active)
                                <option value="0">Não</option>
                                <option value="1" selected>Sim</option>
                                @else
                                <option value="0" selected>Não</option>
                                <option value="1">Sim</option>
                                @endif
                            </select>

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-50">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="featured" class="block text-sm font-medium leading-6 text-sky-500 mb-2">Destaque:</label>
                        <div class="relative">
                            <select id="featured" name="featured" class="rounded-md border-0 py-1.5
                         pr-2 pl-10 ring-1 ring-inset focus:ring-2 focus:ring-inset 
                         outline-none text-slate-950 bg-zinc-50 ring-slate-600">
                                <option value="-1">Selecione</option>
                                @if($product->featured)
                                <option value="0">Não</option>
                                <option value="1" selected>Sim</option>
                                @else
                                <option value="0" selected>Não</option>
                                <option value="1">Sim</option>
                                @endif
                            </select>

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-50">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex gap-x-4">
                    <div>
                        <label for="description" class="block text-sm font-medium leading-6 text-sky-500 mb-2">Descrição</label>
                        <div class="relative">
                            <textarea id="description" name="description" value="" class="rounded-md border-0 py-1.5
                         pr-2 pl-10 ring-1 ring-inset focus:ring-2 focus:ring-inset 
                         outline-none text-slate-950 bg-zinc-50 ring-slate-600">
                            {{ $product->description }}
                            </textarea>

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-50">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                </svg>

                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="instructions" class="block text-sm font-medium leading-6 text-sky-500 mb-2">Instruções</label>
                        <div class="relative">
                            <textarea id="instructions" name="instructions" value="" class="rounded-md border-0 py-1.5
                         pr-2 pl-10 ring-1 ring-inset focus:ring-2 focus:ring-inset 
                         outline-none text-slate-950 bg-zinc-50 ring-slate-600">
                            {{ $product->instructions }}
                            </textarea>

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-50">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex gap-x-4">
                    <div>
                        <label for="link_file" class="block text-sm font-medium leading-6 text-sky-500 mb-2">Link do arquivo</label>
                        <div class="relative">
                            <input type="text" id="link_file" name="link_file" value="{{ $product->link_file }}" class="rounded-md border-0 py-1.5
                         pr-2 pl-10 ring-1 ring-inset focus:ring-2 focus:ring-inset 
                         outline-none text-slate-950 bg-zinc-50 ring-slate-600">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-50">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                </svg>

                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="url_image" class="block text-sm font-medium leading-6 text-sky-500 mb-2">
                            Imagem (para manter a imagem antiga, deixe este campo em branco)
                        </label>
                        <div class="relative">
                            <input type="file" id="url_image" name="url_image" class="rounded-md border-0 py-1.5
                         pr-2 pl-10 ring-1 ring-inset focus:ring-2 focus:ring-inset 
                         outline-none text-slate-950 bg-zinc-50 ring-slate-600">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-zinc-50">
                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div>
                    <div class="flex items-center gap-x-2">
                        <a href="{{ route('produtos')}}" class="bg-red-500 rounded-full py-1 px-4 focus:bg-slate-50
                text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-red-500 focus:text-red-500 focus:border-red-500 transition duration-300 ease-in-out
                hover:bg-red-600 hover:border-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.793 2.232a.75.75 0 0 1-.025 1.06L3.622 7.25h10.003a5.375 5.375 0 0 1 0 10.75H10.75a.75.75 0 0 1 0-1.5h2.875a3.875 3.875 0 0 0 0-7.75H3.622l4.146 3.957a.75.75 0 0 1-1.036 1.085l-5.5-5.25a.75.75 0 0 1 0-1.085l5.5-5.25a.75.75 0 0 1 1.06.025Z" clip-rule="evenodd" />
                            </svg>
                            Cancelar
                        </a>

                        <button type="submit" class="bg-emerald-500 rounded-full py-1 px-4 focus:bg-slate-50
                    text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-emerald-500 focus:text-emerald-500 focus:border-emerald-500 transition duration-300 ease-in-out
                    hover:bg-emerald-600 hover:border-emerald-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path d="M13.75 7h-3v5.296l1.943-2.048a.75.75 0 0 1 1.114 1.004l-3.25 3.5a.75.75 0 0 1-1.114 0l-3.25-3.5a.75.75 0 1 1 1.114-1.004l1.943 2.048V7h1.5V1.75a.75.75 0 0 0-1.5 0V7h-3A2.25 2.25 0 0 0 4 9.25v7.5A2.25 2.25 0 0 0 6.25 19h7.5A2.25 2.25 0 0 0 16 16.75v-7.5A2.25 2.25 0 0 0 13.75 7Z" />
                            </svg>
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection