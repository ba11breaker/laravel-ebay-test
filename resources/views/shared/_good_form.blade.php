<form action="{{route('goods.store')}}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Good Name:</label>
    <input type="text" name="name" class="form-control" value="{{old('name')}}">
    </div>
    <textarea name="description" class="form-control" rows="10" placeholder="Your desciption...">
        {{ old('description') }}
    </textarea>
    <button type="submit" class="btn btn-primary mt-3">Publish</button>
</form>