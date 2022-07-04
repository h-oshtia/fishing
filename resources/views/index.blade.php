
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
                <li><a href="{{ route('login') }}">ログイン</a></li>
                <li><a href="{{ route('register') }}">新規登録</a></li>
                <li><a href="{{ route('register') }}">釣果投稿</a></li>
            </ul>
        </div>
    </div>

    <a href="{{ route('indexrankingpage') }}"><h1>大きさランキングを見る</h1></a></li>



    <h2>投稿一覧</h2>
    <div class="posts">
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="/js/style.js"></script>
 <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</div>
</body>
</html>
