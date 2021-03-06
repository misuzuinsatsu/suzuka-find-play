@extends('layouts.app')

@section('content')

    <h1>id={{ $sentence->id }} の問題編集ページ</h1>
    <figure>
        <img src="{{ asset('images/') }}/{{ $sentence->image }}" width="200px",height="200px">
        <figcaption>現在の画像 ({{ $sentence->image }})</figcaption>
    </figure>

    {!! link_to_route('sentences.edit_image','画像の変更',['id'=>$sentence->id],['class'=>'btn btn-primary']) !!}
    <br>
    <br>
    {!! Form::model($sentence,['route'=>['sentences.update',$sentence->id],'method'=> 'put']) !!}
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
    <br>
    {!! Form::model('sentence',['route' => ['sentences.destroy',$sentence->id],'method'=> 'delete']) !!}
        {!! Form::submit('削除',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}


@endsection