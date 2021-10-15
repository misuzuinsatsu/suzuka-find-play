@extends('layouts.app')

@section('content')

<h1>おつかれさま！</h1>
<ul>
    @foreach($results as $result)
        <li>{{ $result->id }} : {{ $result->result }}</li>
    @endforeach
</ul>


@endsection