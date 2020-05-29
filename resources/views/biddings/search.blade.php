@extends('layouts.default')
@section('title', 'Search Biddings')

@section('content')
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="{{route('biddings.results')}}" method="GET">
            @include('shared._errors')
            {{ csrf_field() }}
            <div class="form-group">
                <label for="searchKey">Search:</label>
                <input type="text" name="searchKey" class="form-control" value="{{old('searchKey')}}">
            </div>
            <div class="form-group">
                <label for="minPrice">Min Price:</label>
                <input type="number" min="0,00" step="0.01" name="minPrice" class="form-comtorl" value="{{ old('minPrice') }}">
            </div>
            <div class="form-group">
                <label for="maxPrice">Max Price:</label>
                <input type="number" min="0,00" step="0.01" name="maxPrice" class="form-comtorl" value="{{ old('maxPrice') }}">
            </div>
            <div class="text-left">
                <button type="submit" class="btn btn-primary mt-3">Search</button>
            </div>
        </form>
    </div>
</div>
<div style="width:20px;height:40px;"></div>
<div class="offset-md-1 col-md-10">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Bidding ID</th>
                <th>Bidder Email</th>
                <th>Good Name</th>
                <th>Good Description</th>
                <th>Offer Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($answers as $answer)
            <tr>
                <td>{{$answer->id}}</td>
                <td>{{$answer->email}}</td>
                <td>{{$answer->name}}</td>
                <td>{{$answer->description}}</td>
                <td>{{$answer->offer_price}}</td>
            </tr>  
            @endforeach
        </tbody>
    </table>
</div>
@stop