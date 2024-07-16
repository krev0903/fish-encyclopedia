<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">

    <title>@yield('title')</title>
</head>
<body>
    
    @include('fish-encyclopedia.parts.header')
    
    <div class="container">
        <section class="fish">
            <h1 class="title">@yield('title')</h1>
            <ul>
                <li>
                    @yield('content')
                    @foreach( $fish_encyclopedias as $fish_encyclopedia )
                    <a href="{{ route('pro_fresh',['id'=>$fish_encyclopedia->id])}}">
                    <img src="{{ asset('storage/' . $fish_encyclopedia->image_path) }}" alt="fish-image">
                    <dl>
                        <dt>{{ $fish_encyclopedia ->name}}</dt>
                        <dd class="scientific">学名：{{ $fish_encyclopedia ->scientific_name }}</dd>
                        <dd class="temp">温度：{{ $fish_encyclopedia ->temp ->name }}</dd>
                        <dd class="ph">P  H ：{{ $fish_encyclopedia ->ph   ->name }}</dd>
                    </dl>
                    </a>
                    @endforeach
                </li>
            </ul>
        </section>
    </div>
    
</body>
</html>