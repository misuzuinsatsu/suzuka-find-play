@extends('layouts.app')

@section('content')

<h1>id={{ $sentence->id }}の問題詳細</h1>
<img src="{{ asset('images/') }}/{{ $sentence->image }}" width="200px",height="200px">
<table class="table table-striped">
    <thead>
        <tr>
            <th>主語</th>
            <th>助詞</th>
            <th>間違い</th>
            <th>目的語</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $sentence->subject }}</td>
            <td>{{ $sentence->particle }}</td>
            <td>{{ $sentence->error }}</td>
            <td>{{ $sentence->object }}</td>
        </tr>
    </tbody>
</table>
{!! link_to_route('sentences.edit','編集',['id'=>$sentence->id],['class'=>'btn btn-default']) !!}
<br>
<br>
{!! Form::model($sentence,['route'=>['sentences.destroy',$sentence->id],'mehod'=>'delete']) !!}
    {!! Form::submit('削除',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@endsection