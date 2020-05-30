@extends('layouts.default')
@section('title', $good->name)

@section('content')
<div class="row">
    <div class="offset-md-2 col-md-8">
    <h2>Good Info</h2>
        <h4>ID Number: {{$good->id}}</h4>
        <h4>Name: {{$good->name}}</h4>
        <h4>Favourites: {{$good->favourites}}</h4>
        <h4>Owner: {{$good->user->name}}</h4>
        <h4>Description: {{$good->description}}</h4>
    </div>
</div>
<div style="width:20px;height:50px;"></div>
<div class="row">
    @if ($good->user_id != Auth::User()->id)
    <div class="offset-md-2 col-md-8">
        <section class="cart_form">
            @include('carts._cart_form')
        </section>
    </div>
    @endif
    <div class="offset-md-2 col-md-8">
        <section class="pdf">
            @include('goods._pdf')
        </section>
    </div>
    <div class="offset-md-2 col-md-8">
        <section class="comment_form">
            @include('comments._comment_form')
        </section>
    </div>
    @if (Auth::user()->id != $good->user->id)
    <div class="offset-md-2 col-md-8">
        <section class="bidding_form">
            @include('biddings._bidding_form')
        </section>
    </div>
    @endif
</div>
<div class="row">
    <div class="offset-md-2 col-md-8 comment">
        <h2>Comments list</h2>
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
<div class="row">
    <div class="offset-md-2 col-md-8 comment">
        <h2>Biddings list</h2>
        @if ($biddings->count() > 0)
            <ul class="list-unstyled">
                @foreach ($biddings as $bidding)
                    @include('biddings._bidding')
                @endforeach
            </ul>
            <div class="mt-5">
                {!! $biddings->render() !!}
            </div>
        @else
            <p>No Biddings!</p>
        @endif
    </div>
</div>
@stop