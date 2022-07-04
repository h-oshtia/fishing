

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿画面</title>
    <link rel="stylesheet" type="text/css" href="/css/base.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

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
               {{-- <li><a href=""><?php echo $msg; ?></a></li> --}}
           </ul>
       </div>
    </div>
    <div class="Allpost another">
            <form method="post" action="{{ route('store') }}" enctype="multipart/form-data" onsubmit="return cheakSubmit()" id="form_id">
                @csrf
                {{-- {{ csrf_token() }} --}}
                <div id="postsplace">
                    <input id="postplace" type="text"  name="place" placeholder="釣れた場所を記入ください"  value="{{ old('placee') }}" />
                </div>
                <div class="postitem">

      <div id="image">
          <div id="img">
              <img id="preview" width="300" height="auto" >
          </div>
          <input type="file" id="myImage" name="image" accept="image/png, image/jpeg" />
      </div>
      <div id="size">
          <textarea  id="postsize" name="size"  cols="5" rows="1" >{{ old('size') }}</textarea>cm
      </div>
      <div id="comment">
      <textarea name="comment" class="postcomment" id="content" cols="80" rows="16" >{{ old('content') }}</textarea>
      </div>
  </div>
  <div class="modalbtn">
      <input type="button" onclick="history.back()" class="back" value="キャンセル">
       <button type="submit" class="btn btn-primary">投稿</button>
       </div>
    </form>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 {{-- <script src="/js/style.js"></script> --}}
 <script>

   $("#myImage").on("change", function (e) {
  var reader = new FileReader();
  reader.onload = function (e) {
      $("#preview").attr("src", e.target.result);
  }
  reader.readAsDataURL(e.target.files[0]);
});


 </script>

</body>
</html>
