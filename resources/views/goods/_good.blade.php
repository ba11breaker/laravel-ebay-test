<li class="media mt-4 mb-4">
    <a href="{{route('user.show', $user->id)}}">
        <img src="{{$user->gravatar() }}" alt="{{$user->name}}" class="mr-3 gravatar">
    </a>
    <div class="media-body">
        <h5 class="media-body">
            {{ $good->name }} 
        <small>/ {{ $user->name }}</small>
        </h5>
        {{ $good->description }}
    </div>
</li>