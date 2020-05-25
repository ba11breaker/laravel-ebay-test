<li class="media mt-4 mb-4">
    <div class="media-body">
        <h5 class="mt-0 mt-1">
            ${{$bidding->offer_price}} -- from 
            <a href="{{route('users.show', $bidding->bidder_id)}}">
                {{$bidding->user->name}}
            </a>
        </h5>
    </div>
</li>