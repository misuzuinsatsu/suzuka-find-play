@extends('layouts.app')

@section('content')

    <h1>id={{ $sentence->id }} の問題編集ページ</h1>
    <img src="{{ asset('images/') }}/{{ $sentence->image }}" width="200px",height="200px">
    <br>
    <br>
    {!! Form::model($sentence,['route'=>['sentences.update',$sentence->id],'method'=> 'put', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('subject','主　語：') !!}
        {!! Form::text('subject') !!}
    </div>
    <div class="form-group">
        {!! Form::label('particle','助　詞：') !!}
        {!! Form::text('particle') !!}
    </div>
    <div class="form-group">
        {!! Form::label('error','間違い：') !!}
        {!! Form::text('error') !!}
    </div>
    <div class="form-group">
        {!! Form::label('object','目的語：') !!}
        {!! Form::text('object') !!}
    </div>
    <div class="form-group">
        {!! Form::file('image') !!}
        <p>200px × 200pxを推奨しています。</p>
    </div>
        {!! Form::submit('更新',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}


@endsection