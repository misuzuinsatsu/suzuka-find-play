@extends('layouts.app')

@section('content')
<?php $score=0; ?>

<h1>おつかれさま！</h1>
<ul>
    @foreach($results as $result)
        <li>{{ $result->id }} : {!! $result->question !!}　→　{{ $result->result }}</li>
        <?php if($result->result == "せいかい"){
            $score += 20;
        } ?>
    @endforeach
    <br>
    <?php echo "こんかいのとくてんは". $score . "点！"; ?>
    <br>
    <?php
    if($score==100){
        echo "かんぺき！てんさいですね！";
    }else if($score>=60){
        echo "よくできました！やりますね！";
    }else{
        echo "がんばったね！";
    }
    ?>
</ul>
<button class="btn btn-default"><a href="/">もどる</a></button>


@endsection