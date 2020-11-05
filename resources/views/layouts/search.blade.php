<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$tableName}}</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/word-test.css')}}">
</head>
<body>
  <div class="top-com">
    <a href="/word-test/public/top" class="btn-animation-02 mgn-left20"><span>TOPページ</span></a>
    <h1 class="title">{{$tableName}} 単語テスト</h1>
    <form method="get" action="problem">
      @csrf
      <label for="start">始まりの数字:</label><input type="text" name="start" id="start"><br>
      <label for="end">終わりの数字:</label><input type="text" name="end" id="end"><br>
      <label for="length" class="length">出題数:</label><input type="text" name="length" id="length"><br>
      <input type="hidden" name="tableName" value="{{$tableName}}">
      <input type="submit" name="create" value="作成" class="button">
    </form>
    <div class="error">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </div>
    @if ($tableName === 'kanji')
    <div class="box">
     <p>レベル</p>
     <ul>
     <li>1~400　　　漢字検定5級</li>
     <li>401~800　　漢字検定4級</li>
     <li>801~1200 　漢字検定3級</li>
     <li>1201~1584　漢字検定準2級</li>
     <li><a href="images/生徒配布用.pdf" target="_blank">生徒配布用はこちら</a></li>
     </ul>
    </div>
    @endif
   </div>
</body>

</html>