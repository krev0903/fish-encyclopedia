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

    <title>淡水魚</title>
</head>
<body>
    <div class="container">
        <section class="fish">
            <h1 class="title">淡水魚</h1>
            <ul>
                <li>
                    @foreach( $fish_encyclopedias as $fish_encyclopedia )
                    <a href="{{ route('fprofile',['id'=>$fish_encyclopedia->id])}}">
                        <img src="{{ asset('images/guppy.jpg') }}" alt="">
                        <dl>
                            <dt>{{ $fish_encyclopedia ->name}}</dt>
                            <dd class="scientific">学名：{{ $fish_encyclopedia ->scientific_name }}</dd>
                            <dd class="temp">温度：{{ $fish_encyclopedia ->temp ->name }}</dd>
                            <dd class="ph">PH　：{{ $fish_encyclopedia ->ph   ->name }}</dd>
                        </dl>
                    </a>
                    @endforeach
                </li>
            </ul>
        </section>
    </div>
    
</body>
</html>