<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formstyle.css') }}">

</head>
<body>

    @include('fish-encyclopedia.parts.header')

    <h1 class="title">ログイン</h1>

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
    <div class="error">
        {{ session('login_error') }}
    </div>
    @endif

    <form class="form" method="POST" action="{{ route('send') }}">
        @csrf
        <table class="table">
            <tr>
                <td>
                    <label>メールアドレス：
                        <input class="input" type="email" id="email" name="email" placeholder="Email address" required autofocus>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label>パスワード：
                        <input class="input" type="password" id="password" name="password" placeholder="Password" required>
                    </label>
                </td>
            </tr>    
        </table>
        <div class="button">
            <button class="login" type="submit">ログイン</button>
        </div>
    </form>
</body>
</html>