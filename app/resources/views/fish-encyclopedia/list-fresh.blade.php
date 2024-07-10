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
    <h1 class="title">淡水魚</h1>

    @foreach( $fish_encyclopedias as $fish_encyclopedia )
    <p>{{ $fish_encyclopedia ->name}}</p>
    @endforeach
    
</body>
</html>