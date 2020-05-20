<form action="{{ route('comments.store') }}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea class="form-control" name="content" rows="3">
        {{ old('content') }}
    </textarea>
    <input type="hidden" name="good_id" value="{{$good->id}}">
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">Comment</button>
    </div>
</form>