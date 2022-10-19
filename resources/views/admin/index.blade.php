@extends('layouts.base')

@section('content')

<form action="{{ route('storePhoto') }}" method="POST" class="flex flex-col w-[30%] m-auto" enctype="multipart/form-data">
    @csrf
    Название:<input type="text" name="name">
    Кто фоткал:<input type="text" name="photographer">
    Где фоткали(область):<input type="text" name="area">
    Где фоткали(город):<input type="text" name="city">
    Дата фотки:<input type="text" name="date">
    Фотка:<input type="file" name="image">
    <input type="submit" value="Сохранить">
</form>

@endsection
