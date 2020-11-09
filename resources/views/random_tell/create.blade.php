@extends('layouts.app')

@section('content')

通話探し中
<video id="my-video" width="400px" autoplay muted playsinline></video>
<p id="my-id"></p>

<textarea id="their-id"></textarea>
<button id="make-call">発信</button>
<video id="their-video" width="400px" autoplay muted playsinline></video>



@endsection