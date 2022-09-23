@extends('layouts.base')

@section('content')
    <div class="grid grid-cols-2">
        <div>
            <h1 class="text-[9.4rem] tracking-wider whitespace-pre selection:text-main selection:bg-bg dark:selection:bg-white w-min">Kockers
Society</h1>
        <h1 class="text-[9.4rem] tracking-wider selection:text-main selection:bg-bg dark:selection:bg-white w-min relative">Records<div class="w-full absolute bg-main h-1 top-20"></div></h1>
            <h2 class="text-[4rem] text-main dark:text-main selection:text-bg selection:bg-main dark:selection:bg-main">
                & now it's all together
            </h2>
        </div>
        <div class="flex flex-col">
            <div class="w-[64%] relative place-self-end pr-12 pt-6">
                <a href="" class="z-20">
                    <img src="{{ asset('img/cover.png') }}" alt="cover" class="w-full h-fit rounded-3xl select-none">
                </a>
                <h3 class="rotate-90 h-min w-min absolute -right-[130px] top-[148px] whitespace-nowrap tracking-[8px]">
                    Last update
                </h3>
                <div class="w-full flex flex-row justify-between items-center mt-4">
                    <h3 class="whitespace-nowrap text-[1.5rem]">
                        VssLocker
                    </h3>
                    <div class="bg-bg dark:bg-white h-1 w-full mx-6"></div>
                    <h3 class="whitespace-nowrap text-[1.5rem]">
                        Inner World EP
                    </h3>
                </div>
            </div>
        </div>
    </div>
    @include('includes.nav')
@endsection
