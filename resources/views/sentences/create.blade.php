@extends('layouts.app')

@section('content')

<h1>問題の新規作成ページ</h1>
{!! Form::model($sentence,['route'=> 'sentences.store']) !!}

    {!! Form::label('subject','主語：') !!}
    {!! Form::text('subject') !!}

    {!! Form::label('particle','助詞：') !!}
    {!! Form::text('particle') !!}

    {!! Form::label('object','目的語：') !!}
    {!! Form::text('object') !!}

    {!! Form::submit('作成') !!}

{!! Form::close() !!}

@endsection