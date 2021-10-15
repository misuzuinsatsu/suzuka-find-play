@extends('layouts.app')

@section('content')
<?php
    if (isset($_COOKIE["visited"])){
        $count = $_COOKIE["visited"] + 1;

        if($count>5){
            $count = 1;
        }
    }else{
        $count = 1;
    }
    $flag1 = setcookie("visited", $count);
?>


<h2>{{ $count }}かいめ</h2>
<div class="play">
    <p>{{ $sentence->subject }}</p>
    <div class="box"></div>
    <p>{{ $sentence->object }}。</p>
</div>
<div class="ans">
    <?php $rand=mt_rand(1,100); ?>

    @if($rand%2==0)
        <p>{!! link_to_route('answer',"$sentence->particle",['count'=>$count,'answer'=>'正解']) !!}</p>
        <p>{!! link_to_route('answer',"$sentence->error",['count'=>$count,'answer'=>'残念']) !!}</p>
    @else
        <p>{!! link_to_route('answer',"$sentence->error",['count'=>$count,'answer'=>'残念']) !!}</p>
        <p>{!! link_to_route('answer',"$sentence->particle",['count'=>$count,'answer'=>'正解']) !!}</p>
    @endif

</div>


@endsection