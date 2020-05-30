@extends('layouts.default')
@section('title', $user->name)

@section('content')
<div class="row">
    <div class="offset-md-2 col-md-8">
      <section class="user_info">
        @include('shared._user_info', ['user' => $user])
      </section>
      <section class="goods_form">
        @include('shared._good_form')
      </section>
      <br />
      <section class="good">
      <h2>Goods List</h2>
      <hr />
        @if ($goods->count() > 0)
            <ul class="list-unstyled">
              @foreach ($goods as $good)
                  @include('goods._good')
              @endforeach
            </ul>
            <div class="mt-5">
              {!! $goods->render() !!}
            </div>
        @else
            <p>No data</p>
        @endif
      </section>
      <br />
      <section class="cart">
      <h2>Cart</h2>
      <hr />
        @if ($carts->count() > 0)
          <ul class="list-unstyled">
            @foreach ($carts as $cart)
                @include('carts._cart')
            @endforeach
          </ul>
          <div class="mt-5">
            {!! $carts->render() !!}
          </div>
        @else
            <p>No data</p>
        @endif
      </section>
    </div>
  </div>
@stop