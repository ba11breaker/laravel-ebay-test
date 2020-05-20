<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar" />
</a>
<h1>Name:  {{$user->name}}</h2>
<h1>Email:  {{ $user->email }}</h2>

