<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">

    <title>user</title>
</head>
<body>

    @include('fish-encyclopedia.parts.header')

    <h1 class="title">プロフィール</h1>

    <x-alert type="message" :session="session('login_success')"/>

    <table>
        <tr class="name">
            <th>名前：</th>
            <td>{{ Auth::user()->name }}</td>
        </tr>
        
        <tr  class="email">
            <th>メールアドレス：</th>
            <td>{{ Auth::user()->email }}</td>
        </tr>
    </table>
    
    <a class="button" href="{{ route('registration') }}">
        <button>登録</button>
    </a>
    <a class="button" href="">
        <button>変更</button>
    </a>
    <form class="button" action="{{route('logout')" method="POST">
    @csrf
        <button>ログアウト</button>
    </form>
</body>
</html>