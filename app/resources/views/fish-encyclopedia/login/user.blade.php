<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title></title>
</head>
<body>

    @include('fish-encyclopedia.parts.header')

    <h1 class="title">プロフィール</h1>

    @if(session('login_succsses'))
        <div class="flash_message">
            {{ session('login_succsses') }}
        </div>
    @endif

    <ul>
        <li>名前：{{ Auth::user()->name }}</li>
        <li>メールアドレス：{{ Auth::user()->email }}</li>
    </ul>
    
</body>
</html>