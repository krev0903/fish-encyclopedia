<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>みんなの熱帯魚図鑑</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('fish-encyclopedia.parts.header')
    
    @if(session('logout'))
        <div class="message">
            {{ session('logout') }}
        </div>
    @endif

    <div class="hero">       
        <h1>みんなの<br>熱帯魚図鑑</h1>
        <img src="{{ asset('images/logo10.png') }}" alt="Logo">
    </div>

    <section class="select">

        <a class="button" href="{{ route('fresh') }}">
            <div class="flesh">
                <div class="name">淡水魚</div>
                <img src="{{ asset('images/fresh.png') }}" alt="fresh">
            </div>     
        </a>

        <a class="button" href="{{ route('sea') }}">
            <div class="sea">
                <div class="name">海水魚</div>
                <img src="{{ asset('images/sea.png') }}" alt="sea">
            </div>
        </a>
        
        <a class="button" href="{{ route('brackish') }}">
            <div class="brackish">
                <div class="name">汽水魚</div>
                <img src="{{ asset('images/brackish.png') }}" alt="brackish">
            </div>  
        </a>
        
    </section>

    <a class="link" href="{{ route('registration') }}">
        <button class="registration">登録</button>
    </a>

    <footer>
        <small>©Produced by sk</small>
    </footer>
</body>
</html>