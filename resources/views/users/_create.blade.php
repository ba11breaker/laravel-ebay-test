@extends('layouts.default')
@section('title', 'Sign Up')

@section('content')
<div class="offset-md-2 col-md-8">
    <div class="card ">
      <div class="card-header">
        <h5>Sign Up</h5>
      </div>
      <div class="card-body">

        @include('shared._errors')

        <form method="POST">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="name">Name：</label>
              <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
  
            <div class="form-group">
              <label for="email">Email：</label>
              <input type="text" name="email" class="form-control" value="{{ old('email') }}">
            </div>
  
            <div class="form-group">
              <label for="password">Password：</label>
              <input type="password" name="password" class="form-control" value="{{ old('password') }}">
            </div>
  
            <div class="form-group">
              <label for="password_confirmation">Password Confirmation：</label>
              <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
            </div>

            <div class="form-group">
              <label for="captcha">Captcha:</label>
              <div class="col-md-8">
                <input id="captcha" name="captcha" required>
                <img src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" title="click to get another captcha">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $ajaxSetup({
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    });
    $(.primary).click(function(e){
      e.preventDefault();

      var name = $("input[name=name]").val();
      var password = $("input[name=password]").val();
      var email = $("input[name=email]").val();
      var password_confirmation = $("input[name=password_confirmation]").val();
    });
    $.ajax({
      type:'POST',
      url:"{{ route('users.store') }}",
      data:{name:name, password:password, email:email},
      success:function(data) {
        console.log('success');
      }
    })
  </script>
@stop