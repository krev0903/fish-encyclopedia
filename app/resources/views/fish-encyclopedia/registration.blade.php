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
    <link rel="stylesheet" href="{{asset('css/formstyle.css')}}">

</head>
<body>

    @include('fish-encyclopedia.parts.header')

    <h1 class="title">登録</h1>

    @if(session('message'))
        <div class="message">
            {{ session('message') }}
        </div>
    @endif
    @if(session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif
             
    <form class="form" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table">
            <tr>
                <td>
                    <label>名前：
                        <input class="input" type="text" id="name" name="name" placeholder="Name" autofocus>
                        @if($errors->has('name')) <span class="error">{{$errors->first('name')}}</span>@endif
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label>学名：
                        <input class="input" type="text" id="scientific_name" name="scientific_name" placeholder="Scientific Name">
                        @if($errors->has('scientific_name')) <span class="error">{{$errors->first('scientific_name')}}</span>@endif
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label class="category" for="category">カテゴリー：
                    <div class="radio">
                        @foreach($categories as $category)
                            <input class="radio-input" type="radio" name="category" id="category_{{ $category->id }}" value="{{ $category->id }}">
                            <label class="radio-label" for="category_{{ $category->id }}">{{ $category->name }}</label>
                        @endforeach                    
                    </div>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="food">餌：
                    <div class="checkbox">
                        @foreach($foods as $food)
                            <input class="checkbox-input" type="checkbox" name="food" id="food_{{ $food->id }}" value="{{ $food->id }}">
                            <label class="checkbox-label" for="food_{{ $food->id }}">{{ $food->name }}</label>
                        @endforeach                    
                    </div>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="temp">水温：
                        <select class="pull" name="temp" id="temp">
                            @foreach($temps as $temp)
                                <option value="{{ $temp->id }}">{{ $temp->name }}</option>
                            @endforeach
                        </select>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="ph">PH:
                        <select class="pull" name="ph" id="ph">
                            @foreach($phs as $ph)
                                <option value="{{ $ph->id }}">{{ $ph->name }}</option>
                            @endforeach
                        </select>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="difficulty">難易度:
                        <select class="pull" name="difficulty" id="difficulty">
                            @foreach($difficulties as $difficulty)
                                <option value="{{ $difficulty->id }}">{{ $difficulty->name }}</option>
                            @endforeach
                        </select>
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label class="detail">説明：
                        <textarea name="description" id="description" cols="30"  rows="10" placeholder="Detail"></textarea>
                        @if($errors->has('description')) <span class="error">{{$errors->first('description')}}</span>@endif
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label>値段：
                        <input class="input" type="text" id="price" name="price" placeholder="price">
                        @if($errors->has('price')) <span class="error">{{$errors->first('price')}}</span>@endif
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label>画像：
                        <input class="image" type="file" id="image_path" name="image_path">
                        @if($errors->has('image_path')) <span class="error">{{$errors->first('image_path')}}</span>@endif
                    </label>
                </td>
            </tr>
        </table>
        <div class="button">
            <button class="reg" type="submit">登録</button>
        </div>
    </form>
</body>
</html>