@extends('layouts.base')

@section('content')
    <div>
        <h1 class="whitespace-pre selection:text-accent selection:bg-bg dark:selection:bg-white w-min">Kockers
Society</h1>
    <h1 class="selection:text-accent selection:bg-bg dark:selection:bg-white w-min relative">Records<div class="w-full absolute bg-accent h-1 top-20"></div></h1>
        <h2 class="text-accent dark:text-accent selection:text-bg selection:bg-accent dark:selection:bg-accent">
            & now it's all together
        </h2>
    </div>
    <div class="flex flex-col">
        <div class="w-[61%] relative place-self-end pr-8 pt-6">
            <a href="" class="z-20">
                <img src="{{ asset('img/cover.png') }}" alt="cover" class="w-full h-fit rounded-3xl select-none">
            </a>
            <h3 class="rotate-90 h-min w-min absolute right-[-99px] top-[148px] whitespace-nowrap tracking-[8px]">
                Last update
            </h3>
            <div class="w-full flex flex-row justify-between items-center mt-4">
                <h3 class="whitespace-nowrap">
                    VssLocker
                </h3>
                <div class="bg-bg dark:bg-white h-1 w-full mx-6"></div>
                <h3 class="whitespace-nowrap">
                    Inner World EP
                </h3>
            </div>
        </div>
    </div>
@endsection