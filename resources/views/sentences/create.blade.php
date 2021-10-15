@extends('layouts.app')

@section('content')

<h1>問題の新規作成ページ</h1>
{!! Form::model($sentence,['route'=> 'sentences.store']) !!}

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
        {!! Form::submit('更新',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection