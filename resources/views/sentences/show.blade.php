@extends('layouts.app')

@section('content')

<h1>id={{ $sentence->id }}の問題詳細</h1>

<p>{{ $sentence->subject }} {{ $sentence->particle }} {{ $sentence->object }}</p>

{!! link_to_route('sentences.edit','編集',['id'=>$sentence->id]) !!}
<br>
<br>
{!! Form::model($sentence,['route'=>['sentences.destroy',$sentence->id],'mehod'=>'delete']) !!}
    {!! Form::submit('削除') !!}
{!! Form::close() !!}
@endsection