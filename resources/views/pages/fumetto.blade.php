@extends('layouts.main-layout')
@section('content')
    
    <h2>{{ $comic -> title }}</h2>

    <p>
        {{$comic -> author}}
        {{$comic -> release_date}}
        {{$comic -> pages}}
    </p>

@endsection