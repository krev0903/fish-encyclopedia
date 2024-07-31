<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formstyle.css') }}">

</head>
<body>

    @include('fish-encyclopedia.parts.header')

    <h1 class="title">新規登録</h1>

    @if(session('message'))
        <div class="message">
            {{ session('message') }}
        </div>
    @endif
    @if(session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif
             
    <form class="form" action="{{ route('register') }}" method="POST">
        @csrf
        <table class="table">
            <tr>
                <td>
                    <label>名前：
                        <input class="input" type="text" id="name" name="name" placeholder="Name" autofocus>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label>email：
                        <input class="input" type="email" id="email" name="email" placeholder="email" autofocus>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label>パスワード：
                        <input class="input" type="password" id="password" name="password" placeholder="password" autofocus>
                    </label>
                </td>
            </tr>

            
        </table>
        <div class="button">
            <button class="reg" type="submit">登録</button>
        </div>
    </form>
</body>
</html>