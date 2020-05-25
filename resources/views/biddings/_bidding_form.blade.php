<form action="{{route('biddings.store')}}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}
    <div class="form-group">
        <label for="offer_price">Offer Price:</label>
        <input type="number" min="0,00" step="0.01" name="offer_price" class="form-comtorl" value="{{ old('offer_price') }}">
    </div>
    <input type="hidden" name="good_id" value="{{$good->id}}">
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">Bid it</button>
    </div>
</form>