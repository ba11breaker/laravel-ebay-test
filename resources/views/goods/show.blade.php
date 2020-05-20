@extends('layouts.default')
@section('title', $good->name)

@section('content')
<div class="row">
    <div class="offset-md-2 col-md-8">
        <h4>ID Number: {{$good->id}}</h4>
        <h4>Name: {{$good->name}}</h4>
        <h4>Favourites: {{$good->favourites}}</h4>
        <h4>Owner: {{$good->user->name}}</h4>
        <h4>Description: {{$good->description}}</h4>
    </div>
</div>
<div style="width:20px;height:50px;"></div>
<div class="row">
    <div class="offset-md-2 col-md-8 comment">
        @if ($comments->count() > 0)
            <ul class="list-unstyled">
                @foreach ($comments as $comment)
                    @include('comments._comment')
                @endforeach
            </ul>
            <div class="mt-5">
                {!! $comments->render() !!}
            </div>
        @else
            <p>No comments!</p>
        @endif
    </div>
</div>
@stop