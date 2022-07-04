<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>toppage</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/base.css">
</head>
<body>
    <div class="header">
        <div class="headerlog">
            <p id="headlogo">Fishing</p>
            <img src="/img/tsurizao_13222.png" width="70px" height="70px">
            <p2>釣果投稿型<br>釣り情報サイト</p2>
        </div>
        <div class="header_item">
            <ul>
                <li><a href="{{ route('Toppage') }}">トップページ</a></li>
                <li><a href="{{ route('mypage') }}">マイページ</a></li>
                <li class="logout">
                </ul>
            </div>
            <div class="toplogout">
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('ログアウト') }}
                    </x-dropdown-link>
                </form>
            </div>
    </div>

        <h1>大きさランキング</h1>

<div class="topranking">
    <div class="ranking">
        <img src="/img/gekkeijyu35.png" width="130" height="130px">
        <img src="/img/gekkeijyu36.png" width="130" height="130px">
        <img src="/img/gekkeijyu37.png" width="130" height="130px">
    </div>
    <div class="rankingposts">
        @foreach($posts as $post)
    <div class="Allposts">
    <div class="postsitems">
            <p id="size">{{ $post->size }}cm</p>
          <img src="{{ asset('storage/image/'.$post->image)}}" width="250" heigh="auto">
        <div class="comment">
            <div id="commentheader">
                <p id="place">{{ $post->place }}</p>
            <p id="time">{{ $post->created_at }}</p>
        </div>
            <p>{{ $post->comment }}</p>
    </div>
    </div>
    </div>
    @endforeach
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="/js/style.js"></script>
 <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</div>
</body>
</html>
