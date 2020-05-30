<li class="media mt-4 mb-4">
    <div class="media-body">
        <h5 class="mt-0 mt-1">
            <a href="{{route('goods.show', $cart->good)}}">
                {{$cart->good->name}}
            </a>
        </h5>
        {{$cart->good->description}}
    </div>
</li>
@if ($good->user_id == Auth::user()->id)
    <form action="{{route('carts.destroy', $cart->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button type="submit" class="btn btn-sm btn-danger">
            Remove
        </button>
    </form>
@endif
<hr>