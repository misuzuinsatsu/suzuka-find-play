@extends('layouts.app')

@section('content')

<h1>問題一覧</h1>

@if(count($sentences) > 0)
    <ul>
        @foreach($sentences as $sentence)
            <li>{!! link_to_route('sentences.show',$sentence->id,['id'=>$sentence->id]) !!}：{{ $sentence->subject }} {{ $sentence->particle }} {{ $sentence->object }}</li>
        @endforeach
    </ul>
@endif

{!! link_to_route('sentences.create','新規作成') !!}

@endsection