@extends('layouts.main')

@section('content')

<h1>Lista Comics</h1>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Sale date</th>
        <th scope="col">Type</th>
        <th scope="col">Azioni</th>

      </tr>
    </thead>
    <tbody>

        @foreach ( $comics as $comic )

        <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td><a href="{{route('comic.show', $comic->id)}}" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a></td>


          </tr>

        @endforeach


    </tbody>
  </table>

@endsection
