<form action="{{ route('carts.store') }}" method="POST">
    @include('shared._errors')
    {{csrf_field()}}
    <input type="hidden" name="good_id" value="{{$good->id}}">
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">Add Cart</button>
    </div>
</form>