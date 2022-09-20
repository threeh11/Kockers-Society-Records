@extends('layouts.base')

@section('content')
    <div class="flex flex-col gap-y-20 mb-10">

        <div class="w-auto h-96 flex justify-start rounded-3xl overflow-hidden bg-accent">
            <img src="{{ asset('img/1.jpg') }}" alt="photo" class="w-auto h-full">
        </div>

        <div class="w-auto h-96 flex justify-end rounded-3xl overflow-hidden bg-accent">
            <img src="{{ asset('img/2.jpg') }}" alt="photo" class="w-auto h-full">
        </div>

    </div>
@endsection