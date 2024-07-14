<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

    <title>熱帯魚</title>
</head>
<body>
<h1 class="title">熱帯魚</h1>
<section class="main">
    <h1 class="profile">
        <figure class="name">{{$fish_encyclopedia->name}}
            <figcaption class="fig">
                <ul>
                    <li>学名
                        <div>{{$fish_encyclopedia->scientific_name}}</div>
                    </li>
                    <li>カテゴリー
                        <div>{{$fish_encyclopedia->category->name}}</div>
                    </li>
                    <li>PH
                        <div>{{$fish_encyclopedia->ph->name}}</div>
                    </li>
                    <li>温度
                        <div>{{$fish_encyclopedia->temp->name}}</div>
                    </li>
                    <li>餌
                        <div>{{$fish_encyclopedia->food->name}}</div>
                    </li>
                    <li>飼育難易度
                        <div>{{$fish_encyclopedia->difficulty->name}}</div>
                    </li>
                    <!-- <li>
                        <div></div>
                    </li> -->
                </ul>
                <img class="img" src="{{ asset('storage/' . $fish_encyclopedia->image_path) }}" alt="fish-img">
            </figcaption>
        </figure>
    </h1>
</section>
    
    <section>
        <h1 class="career">説明
            <ul class="content"><hr>
                <li>{{$fish_encyclopedia->description}}</li>
            </ul>
        </h1>
        
    </section>
    
    
</body>
</html>