<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="{{asset('css/word-test.css')}}">
  <title>Selection</title>
</head>
<body>
  <div class="top-com">
    <a href="/word-test/public/top" class="btn-animation-02 mgn-left120"><span>TOPページ</span></a>
    <h1 class="title center">中学英単語</h1>
    <form method="get" action="search">
      @csrf
      <input type="hidden" name="tableName" value="junior_en">
      <input type="submit" name="create" value="　日本語⇨英語　" class="button">
    </form>
    <form method="get" action="search">
      @csrf
      <input type="hidden" name="tableName" value="junior_ja">
      <input type="submit" name="create" value="　英語⇨日本語　" class="button">
    </form>
    <div class="english_box">
     <li><a href="images/junior_en.pdf" target="_blank">生徒配布用はこちら</a></li>
    </div>
   </div>
</body>

</html>