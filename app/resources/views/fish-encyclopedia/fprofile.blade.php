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
<h1 class="title">熱帯魚</h1>
    <section>
        <h1 class="profile">基本情報
            <figure class="fig">
                <img class="img" src="{{ asset('images/guppy.jpg') }}" alt="fish-img">
                <figcaption class="cap">
                    <ul>
                        <li>名前
                            <div>{{$fish_encyclopedia->name}}</div>
                        </li>
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
                        <!-- <li>
                            <div></div>
                        </li> -->
                    </ul>
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