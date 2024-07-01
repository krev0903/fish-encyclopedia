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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
    <h1 class="title">登録</h1>
    
    <form action="" method="POST">
        <label for="name">名前：</label>
        <input type="text">

        <label for="">：</label>
        <input type="text">

        <label for="category">カテゴリー：</label>
        <select name="category" id="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button type="submit">登録</button>
    </form>
</body>
</html>
名前、学名、画像、説明、カテゴリ、PH、温度、値段