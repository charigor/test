@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <search></search>
        <div class="col-md-8 d-flex flex-column">
{{--            @if(isset($users))--}}
{{--                @foreach($users as $user)--}}
{{--                    <div class=" d-flex">--}}
{{--                        <span class="m-2">{{$user->name}}</span>--}}
{{--                        <span class="m-2">{{$user->email}}</span>--}}
{{--                        <span class="m-2">{{$user->created_at}}</span>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}

                @if($movies)
                    <ul>
                    @foreach($movies as $movie)
                            <li>{{$movie->name}}
                                <a  href="{{route('like',[$movie->id])}}">like</a>
                                <span>колличество лайков: {{$movie->likes->count()}}</span>
                            </li>
                    @endforeach
                    </ul>
                @endif
                @if($books)
                    <ul>
                        @foreach($books as $book)
                            <li>{{$book->name}}
                                <a   href="{{route('like',[$book->id])}}">like</a>
                                <span>колличество лайков: {{$book->likes->count()}}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif
        </div>
    </div>
</div>
@endsection
