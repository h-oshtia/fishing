

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Mypage</title>
    <link rel="stylesheet" type="text/css" href="/css/base.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

    <div class="heade">
       <div class="headerlog">
           <p id="headlogo">Fishing</p>
           <img src="/img/tsurizao_13222.png" width="70px" height="70px">
           <p2>釣果投稿型<br>釣り情報サイト</p2>
       </div>
       <div class="header_item">
           <ul>
               <li><a href="{{ route('create') }}">釣果投稿</a></li>
               <li><a href="{{ route('Toppage') }}">トップページ</a></li>
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
    <div class="delete">
        <form action="{{ route('delete', $post->id) }}" method="post" class="">
            @csrf
            <button id="deleteBtn" type="submit" class="edit" onclick="return confirm('削除しますか？')">削除</button>
        </form>
    </div>
</div>
    @endforeach
    </div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="/js/style.js">

 </script>
</body>
</html>
