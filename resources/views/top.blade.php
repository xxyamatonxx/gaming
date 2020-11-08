@extends('layouts.app')

@section('content')
<a href="{{route('random_tell.create')}}">ランダム通話</a>
<a href="{{route('tell_room.create')}}">通話部屋を作成</a>


@endsection