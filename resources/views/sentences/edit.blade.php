@extends('layouts.app')

@section('content')

    <h1>{{ $sentence->id }} の問題編集ページ</h1>

    {!! Form::model($sentence,['route'=>['sentences.update',$sentence->id],'method'=> 'put']) !!}
        {!! Form::label('subject','主語：') !!}
        {!! Form::text('subject') !!}

        {!! Form::label('particle','助詞：') !!}
        {!! Form::text('particle') !!}

        {!! Form::label('object','目的語：') !!}
        {!! Form::text('object') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}


@endsection