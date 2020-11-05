<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/word-test.css')}}">
</head>

<body>
  <section>
    <div class="top">
      　　<table>
        <tr>
          <td>
            <form method="get" action="/word-test/public/search">
              <input type="hidden" name="tableName" value="{{$tableName}}">
              <input type="submit" value="問題作成ページ">
            </form>
          </td>
          <td>
            <form method="get" action="problem">
              <input type="hidden" name="flg" value="flg">
              <input type="hidden" name="tableName" value="{{$tableName}}">
              <input type="hidden" name="params" value="<?= base64_encode(serialize($params)); ?>">
              <input type="hidden" name="words" value="<?= base64_encode(serialize($words)); ?>">
              <input type="submit" value="問題" class="noprint">
            </form>
          </td>
          <td><input type="button" value="印刷" class="noprint" onclick="window.print();" /></td>
        </tr>
      </table>
    </div>
    　　　<table class="border">
      <caption>@yield('title')<?php print "範囲　" . $params['start'] . '~' . $params['end'] . 'まで　　出題数　' . $params['length'] ?></caption>
      <tr class="border">
        <th class="border first">番号</th>
        <th class="border second">@yield('second')</th>
        <th class="border third">@yield('third')</th>
      </tr>

      <?php foreach ($words as $word) { ?>
        <tr class="border">

          <td class="border">{{$word->number}}</td>
          <td class="border">{{$word->word}}</td>
          <td class="border">{{$word->translation}}</td>

        </tr>
      <?php    } ?>
    </table>
  </section>
</body>

</html>