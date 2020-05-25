<li class="media mt-4 mb-4">
    <div class="media-body">
        <h5 class="mt-0 mt-1">
            ${{$bidding->offer_price}} -- from 
            <a href="{{route('user.show', $biddings->bidder_id)}}">
                {{$biddings->user->name}}
            </a>
        </h5>
    </div>
</li>