@extends('layout')
@section('content')
<div class="flex flex-row justify-center items-center gap-2 md:min-h-screen md:px-8
    flex-wrap-reverse mt-4 md:mt-0">

    <div class="flex flex-col justify-center text-start md:w-6/12 w-72">
        <sapn class="font-extrabold text-sky-500 md:my-4 capitalize 
            2xl:w-6/12 xl:w-8/12 lg:w-8/12 2xl:text-6xl xl:text-4xl lg:text-4xl
            md:text-4xl md:w-7/12 text-2xl w-72">
            Gerencie seus produtos
        </sapn>

        <p class="2xl:w-8/12 xl:w-9/12 2xl:text-xl xl:text-lg
            lg:w-9/12 text-md mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Duis facilisis sodales sapien, eget finibus purus solli
            citudin a. Donec volutpat sem in urna ornare vulputate.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Duis facilisis sodales sapien, eget finibus purus solli
            citudin a. Donec volutpat sem in urna ornare vulputate.
        </p>

        <a href="{{ route('produtos') }}" class="hidden md:block">
            <button type="submit" class="bg-sky-500 rounded-full py-2 px-16
                    focus:bg-white border-2 border-sky-500 focus:text-sky-500 focus:border-sky-500 font-bold
                    capitalize mt-10 w-fit self-start transition duration-300 ease-in-out flex items-center
                    gap-x-1 hover:bg-sky-600 hover:border-sky-600 text-zinc-50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                </svg>
                Começar 
            </button>
        </a>

    </div>

    <div class="flex justify-center items-center">
        <!-- <img src="https://storytale-public2.b-cdn.net/2021/08/16/a15f9a5e-7bec-42ea-9846-161b115c43cc-Shoppingcart.png?height=600" class="2xl:w-[32rem] xl:w-96 lg:w-[24rem] md:w-96 w-64 my-8 md:my-0 rounded-3xl"> -->
        <img src="./images/img-placeholder-1.png" class="2xl:w-[32rem] xl:w-96 lg:w-[24rem] md:w-96 w-64 my-8 md:my-0 rounded-3xl">
    </div>

</div>
<div class="flex justify-center items-center gap-x-20 flex-wrap 
        md:flex-nowrap mt-8 md:mt-0">
    <!-- <img src="https://img.freepik.com/free-vector/online-wishes-list-concept-illustration_114360-3900.jpg?w=740&t=st=1705950583~exp=1705951183~hmac=9788fd36f2ed377767e6a04c32067bf923cb046c34877434fcc9702860863b6a" class="md:w-[28rem] w-[22rem] rounded-3xl"> -->
    <img src="./images/img-placeholder-2.png" class="md:w-[28rem] w-[22rem] rounded-3xl">

    <div class="flex flex-col w-3/5">
        <sapn class="font-extrabold text-4xl text-sky-500 my-4">
            Eficiência
        </sapn>

        <p class="2xl:w-8/12 xl:w-9/12 2xl:text-xl xl:text-lg
            lg:w-9/12 text-md mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Duis facilisis sodales sapien, eget finibus purus solli
            citudin a. Donec volutpat sem in urna ornare vulputate.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Duis facilisis sodales sapien, eget finibus purus solli
            citudin a. Donec volutpat sem in urna ornare vulputate.
        </p>
    </div>
</div>
<div class="flex justify-center items-center gap-x-20 flex-wrap-reverse 
        md:flex-nowrap">
    <div class="flex flex-col w-3/5">
        <sapn class="font-extrabold text-4xl text-sky-500 my-4">
            Qualidade
        </sapn>

        <p class="2xl:w-8/12 xl:w-9/12 2xl:text-xl xl:text-lg
            lg:w-9/12 text-md mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Duis facilisis sodales sapien, eget finibus purus solli
            citudin a. Donec volutpat sem in urna ornare vulputate.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Duis facilisis sodales sapien, eget finibus purus solli
            citudin a. Donec volutpat sem in urna ornare vulputate.
        </p>
    </div>

    <img src="https://img.freepik.com/free-vector/features-overview-concept-illustration_114360-1500.jpg?w=740&t=st=1705950597~exp=1705951197~hmac=248a6f3fae1ff7ad97697317f454c9ee38eca7bdd058dbb0d6108f3ad96cb4a0" class="md:w-[22rem] w-[18rem] rounded-3xl">
</div>
@endsection