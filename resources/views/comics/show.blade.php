@extends('layouts.main')

@section('content')

<h3 class=" my-5">{{$comic->title}}</h3>

<div class=" d-flex flex-row">
    <div class="image">
        <img class=" w-75" src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>
    <div class="info">
        <div class="description my-2">Description: {{$comic->description}}</div>
        <div class="price my-2">Price: {{$comic->price}}</div>
        <div class="series my-2">Series: {{$comic->series}}</div>
        <div class="sale_date my-2">Sale date: {{$comic->sale_date}}</div>
        <div class="type my-2">Type: {{$comic->type}}</div>
    </div>
</div>


@endsection
