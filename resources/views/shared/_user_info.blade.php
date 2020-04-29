<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar" />
</a>
<h1>{{ $user->name }}</h1>

<form method="POST" action="{{ route('users.update', $user->id )}}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Name：</label>
      <input type="text" name="name" class="form-control" value="{{ $user->name }}" disabled>
    </div>

    <div class="form-group">
      <label for="email">Email：</label>
      <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
    </div>
</form>
