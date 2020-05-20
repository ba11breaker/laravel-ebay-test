<li class="media mt-4 mb-4">
    <div class="media-body">
        <h5 class="media-body">
            <a href="{{route('goods.show', $good->id)}}">
                {{ $good->name }} 
            </a>
        <small>/Favourites: {{ $good->favourites }}</small>
        </h5>
        {{ $good->description }}
    </div>
    <form action="{{ route('goods.update', $good->id)}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type=hidden name="update" value="favourite"  />
        <button type="submit" class="btn btn-primary">Like it</button>
    </form>
</li>
<hr />