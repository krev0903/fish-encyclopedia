<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<header class="bg-green-400 p-3 text-gray-600 text-[min(3vw,30px)]">
    <nav class="flex justify-between container items-center">
        <div>
            <img class="size-[min(7vw,60px)]" src="{{asset('images/logo10.png')}}" alt="">
        </div>
        <div class="space-x-4">
            <a class="hover:text-blue-500 transition-all duration-300" href="{{ route('home') }}">ホーム</a>
            <a class="hover:text-blue-500 transition-all duration-300" href="{{ route('fresh') }}">熱帯魚</a>
            <a class="hover:text-blue-500 transition-all duration-300" href="{{ route('sea') }}">海水魚</a>
            <a class="hover:text-blue-500 transition-all duration-300" href="{{ route('brackish') }}">汽水魚</a>
            <a class="hover:text-blue-500 transition-all duration-300" href="{{ route('registration') }}">登録</a>
            <a class="hover:text-blue-500 transition-all duration-300" href="{{ route('showLogin') }}">ログイン</a>
            <a class="hover:text-blue-500 transition-all duration-300" href="{{ route('register') }}">新規登録</a>
        </div>
    </nav>
</header>
