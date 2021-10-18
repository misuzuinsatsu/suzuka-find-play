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

<figure>
    <img src="{{ asset('images/') }}/{{ $sentence->image }}" width="200px",height="200px">
</figure>

<div class="play">
    <p>{{ $sentence->subject }}</p>
    <div class="box"></div>
    <p>{{ $sentence->object }}。</p>
</div>
<?php
$question=$sentence->subject . "<span class='red'>" . $sentence->particle . "</span>" . $sentence->object;
?>
<div class="ans">
    <?php $rand=mt_rand(1,100); ?>

    @if($rand%2==0)
        <p>{!! link_to_route('answer',"$sentence->particle",['count'=>$count,'answer'=>'せいかい','question'=>$question]) !!}</p>
        <p>{!! link_to_route('answer',"$sentence->error",['count'=>$count,'answer'=>'ざんねん','question'=>$question]) !!}</p>
    @else
        <p>{!! link_to_route('answer',"$sentence->error",['count'=>$count,'answer'=>'ざんねん','question'=>$question]) !!}</p>
        <p>{!! link_to_route('answer',"$sentence->particle",['count'=>$count,'answer'=>'せいかい','question'=>$question]) !!}</p>
    @endif

</div>


@endsection