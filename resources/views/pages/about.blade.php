@extends('pages.master')
@section('content')

    <div class="videos-header card">
        <h1>{{ $header }}</h1>
    </div>

    <div class="videos-header card">
        <h3>{{ $content }}</h3>
        <h3>{{ $date }}</h3>
    </div>

@endsection