@extends('views.main-layout')

@section('content')

    <h1>Comics</h1>
    <ul>
        @foreach ($comics as $comic)

            <li>
                <b>{{$comic -> title}}</b>
            </li>

        @endforeach
    </ul>

@endsection