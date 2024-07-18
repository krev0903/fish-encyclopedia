<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>

    <script src=></script>
    <link rel="stylesheet" href="{{asset('app.css')}}">
</head>
<body>
  
    @include('fish-encyclopedia.parts.header')
      
    <form class="form-signin" method="POST" action="{{ route('send') }}">
      @csrf
      <h1 class="h3 mb-3 font-weight-normal">ログイン</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

        @if(session('login_error'))
        <div class="flash_error_message">
            {{ session('login_error') }}
        </div>
        @endif

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
    </form>
  
</body>
</html>