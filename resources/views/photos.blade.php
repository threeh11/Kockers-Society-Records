@extends('layouts.base')

@section('content')
    <div class="flex flex-col gap-y-20">
        <div class="w-[66%] h-[500px] odd:place-self-start relative group">
            <svg width="110" height="110" viewBox="0 0 110 110" class="absolute fill-white z-30 left-20 bottom-20 stroke-bg dark:stroke-white dark:fill-bg" xmlns="http://www.w3.org/2000/svg">
                <circle cx="55" cy="55" r="53.5" transform="rotate(-90 55 55)" stroke-width="3"/>
                <path d="M47.875 28.75L74.125 55L47.875 81.25" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="absolute flex flex-col p-6 bg-white dark:bg-bg rounded-3xl z-30 -right-52 top-24">
                <h2 class="text-bg dark:text-main">
                    Moscow oblast
                </h2>
                <h2 class="text-bg dark:text-main">
                    Kubrinsk
                </h2>
                <h3 class="mt-10 font-semibold text-bg dark:text-main">
                    06 december 2020
                </h3>
            </div>
            <a href="" class="h-full w-full rounded-3xl overflow-hidden absolute z-20">
                <img src="{{ asset('img/1.jpg') }}" alt="photo" class="rounded-3xl select-none">
            </a>
            <div class="absolute w-full h-full -top-3 -left-3 rounded-3xl bg-main z-10"></div>
        </div>
        <div class="w-[66%] h-[500px] even:place-self-end relative group">
            <svg width="110" height="110" viewBox="0 0 110 110" class="absolute fill-white z-30 right-20 bottom-20 stroke-bg dark:stroke-white dark:fill-bg" xmlns="http://www.w3.org/2000/svg">
                <circle cx="55" cy="55" r="53.5" transform="rotate(-90 55 55)" stroke-width="3"/>
                <path d="M47.875 28.75L74.125 55L47.875 81.25" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="absolute flex flex-col p-6 bg-white dark:bg-bg rounded-3xl z-30 -left-52 top-24">
                <h2 class="text-bg dark:text-main text-right">
                    Moscow oblast
                </h2>
                <h2 class="text-bg dark:text-main text-right">
                    Sergiev Posad
                </h2>
                <h3 class="mt-10 font-semibold text-bg dark:text-main text-right">
                    06 december 2020
                </h3>
            </div>
            <a href="" class="h-full w-full rounded-3xl overflow-hidden absolute z-20">
                <img src="{{ asset('img/2.jpg') }}" alt="photo" class="rounded-3xl select-none">
            </a>
            <div class="absolute w-full h-full -top-3 -right-3 rounded-3xl bg-main z-10"></div>
        </div>
        <div class="w-[66%] h-[500px] odd:place-self-start relative group">
            <svg width="110" height="110" viewBox="0 0 110 110" class="absolute fill-white z-30 left-20 bottom-20 stroke-bg dark:stroke-white dark:fill-bg" xmlns="http://www.w3.org/2000/svg">
                <circle cx="55" cy="55" r="53.5" transform="rotate(-90 55 55)" stroke-width="3"/>
                <path d="M47.875 28.75L74.125 55L47.875 81.25" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="absolute flex flex-col p-6 bg-white dark:bg-bg rounded-3xl z-30 -right-52 top-24">
                <h2 class="text-bg dark:text-main">
                    Republic of Mari El
                </h2>
                <h2 class="text-bg dark:text-main">
                    Yoshkar ola
                </h2>
                <h3 class="mt-10 font-semibold text-bg dark:text-main">
                    30 january 2022
                </h3>
            </div>
            <a href="" class="h-full w-full rounded-3xl overflow-hidden absolute z-20">
                <img src="{{ asset('img/3.png') }}" alt="photo" class="rounded-3xl select-none">
            </a>
            <div class="absolute w-full h-full -top-3 -left-3 rounded-3xl bg-main z-10"></div>
        </div>
        <div class="w-[66%] h-[500px] even:place-self-end relative group">
            <svg width="110" height="110" viewBox="0 0 110 110" class="absolute fill-white z-30 right-20 bottom-20 stroke-bg dark:stroke-white dark:fill-bg" xmlns="http://www.w3.org/2000/svg">
                <circle cx="55" cy="55" r="53.5" transform="rotate(-90 55 55)" stroke-width="3"/>
                <path d="M47.875 28.75L74.125 55L47.875 81.25" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="absolute flex flex-col p-6 bg-white dark:bg-bg rounded-3xl z-30 -left-52 top-24">
                <h2 class="text-bg dark:text-main text-right">
                    Republic of Mari El
                </h2>
                <h2 class="text-bg dark:text-main text-right">
                    Yoshkar ola
                </h2>
                <h3 class="mt-10 font-semibold text-bg dark:text-main text-right">
                    29 december 2021
                </h3>
            </div>
            <a href="" class="h-full w-full rounded-3xl overflow-hidden absolute z-20">
                <img src="{{ asset('img/4.png') }}" alt="photo" class="rounded-3xl select-none">
            </a>
            <div class="absolute w-full h-full -top-3 -right-3 rounded-3xl bg-main z-10"></div>
        </div>
    </div>
    <div class="text-center py-20">
        <a href="{{ route('photosArchive') }}" class="text-bg dark:text-white font-normal text-[24px] leading-7">All photos</a>
    </div>
@endsection