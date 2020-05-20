@extends('layouts.default')

@section('content')
  @if (Auth::check())
      <div class="row">
        <div class="col-md-8">
          @if ($goods->count() > 0)
            <ul class="list-unstyled">
              @foreach ($goods as $good)
                  @include('goods._good')
              @endforeach
            </ul>
          @else
            <p>No data</p>
          @endif
        </div>
      </div>
  @endif
@stop