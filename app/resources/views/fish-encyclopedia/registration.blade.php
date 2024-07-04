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
    <h1 class="title-r">登録</h1>

    @if(session('flash_message'))
        <div class="flash_message">
            {{ session('flash_message') }}
        </div>
    @endif
    @if(session('flash_error_message'))
        <div class="flash_error_message">
            {{ session('flash_error_message') }}
        </div>
    @endif
    
    <form class="form" action="{{ route('store') }}" method="POST">
        @csrf
        <table class="table">
            <tr>
                <td>
                    <label>名前：
                        <input class="input" type="text" id="name">
                        @if($errors->has('name')) <span class="error">{{$errors->first('name')}}</span>@endif
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label>学名：
                        <input class="input" type="text" id="scientific">
                        @if($errors->has('scientific_name')) <span class="error">{{$errors->first('scientific_name')}}</span>@endif
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- <label for="category">カテゴリー：
                        <select class="pull" name="category" id="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </label> -->
                    <label for="category">カテゴリー：</label>
                    <div class="radio">
                        @foreach($categories as $category)
                            <input class="radio-input" type="radio" name="category" id="category_{{ $category->id }}" value="{{ $category->id }}">
                            <label class="radio-label" for="category_{{ $category->id }}">{{ $category->name }}</label>
                        @endforeach                    
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <label>説明：
                        <textarea name="" id="detail"></textarea>
                        @if($errors->has('description')) <span class="error">{{$errors->first('description')}}</span>@endif
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label>値段：
                        <input class="input" type="text" id="price">
                        <!-- laravel.txtから持ってくる -->
                    </label>
                </td>
            </tr>
            <div class="button"><button class="reg" type="submit">登録</button></div>
        </table>
    </form>
</body>
</html>
名前、学名、画像、説明、カテゴリ、PH、温度、値段