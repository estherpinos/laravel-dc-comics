@extends('layouts.main')

@section('content')
<h1>Inserimento nuovo comic</h1>

<form action="{{route('comic.store')}}" method="POST"></form>

@endsection
