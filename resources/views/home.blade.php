@extends('layouts.main')

@section('content')


<h1>COMICS</h1>
<p>Attualmente ci sono {{$num_comics}} series</p>
<a href="{{route('comic.create')}}" class="btn btn-primary">Creare un nuovo comic</a>

@endsection
