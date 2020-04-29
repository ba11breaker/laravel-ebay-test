<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign Up Confirmation</title>
</head>
<body>
  <h1>Welcome to sign up in Ebay-test</h1>

  <p>
    Please click on the following link to complete sign up.
    <a href="{{ route('confirm_email', $user->activation_token) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>
    If it isn't your operation, please ignore this email.
  </p>
</body>
</html>