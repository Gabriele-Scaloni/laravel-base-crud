@extends('layouts.main-layout')

@section('content')

    <h1>Comics</h1>
    <ul>
        @foreach ($comics as $comic)

            <li>
                <b>
                    <a href="{{route('fumetto', $comic -> id)}}">
                        {{$comic -> title}}
                    </a>
                </b>
            </li>

        @endforeach
    </ul>

@endsection