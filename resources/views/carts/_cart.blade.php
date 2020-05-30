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
<hr>