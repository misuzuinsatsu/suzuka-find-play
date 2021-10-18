@extends('layouts.app')

@section('content')

<h1>問題一覧</h1>

@if(count($sentences) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>主語</th>
                <th>助詞</th>
                <th>間違い</th>
                <th>目的語</th>
                <th>画像</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($sentences as $sentence)
                <tr>
                    <td>{{ $sentence->id }}</td>
                    <td>{{ $sentence->subject }}</td>
                    <td>{{ $sentence->particle }}</td>
                    <td>{{ $sentence->error }}</td>
                    <td>{{ $sentence->object }}</td>
                    <td>{{ $sentence->image }}</td>
                    <td>{!! link_to_route('sentences.edit','編集',['id'=>$sentence->id],['class'=>'btn btn-primary']) !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

{!! link_to_route('sentences.create','新規作成',null,['class'=>'btn btn-warning']) !!}

@endsection