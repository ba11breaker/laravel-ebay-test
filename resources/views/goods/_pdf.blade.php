<form action="{{route('pdf')}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$good->id}}">
    <input type="hidden" name="name" value="{{$good->id}}">
    <input type="hidden" name="description" value="{{$good->description}}">
    <input type="hidden" name="user_name" value="{{$good->user->name}}">
    <input type="hidden" name="favourites" value="{{$good->favourites}}">
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">
            Generate PDF
        </button>
    </div>
</form>
<br>