<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>My Site</title>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/parsonal.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv=" X-UA-Compatible" content="ie=edge">
</head>
<body>
  <h1>キャスト名</h1>
  <div class="info">
    <p>キャスト番号：</p>
  </div>
  <div class="info">
    <p>本名：</p>
  </div>
  <div class="info">
    <p>住所：</p>
  </div>
  <div class="info">
    <p>メールアドレス：</p>
  </div>
  <div class="info">
    <p>電話番号：</p>
  </div>
  <div class="get">
    <p>総勤務時間</p>
    <input type="time" id="filed1" class="time">
  </div>
  <div class="get">
    <p>金土勤務時間</p>
    <input type="time" id="filed2" class="time">
  </div>
  <div class="get">
    <p>深夜勤務時間</p>
    <input type="time" id="filed3" class="time">
  </div>
  <div class="get">
    <p>金土深夜勤務時間</p>
    <input type="time" id="filed4" class="time">
  </div>
  <div class="get">
    <p>ドリンク</p>
    <input type="number" id="filed5" class="drink">
  </div>
  <div class="get">
    <p>チェキ</p>
    <input type="number" id="filed6" class="cheki">
  </div>
</body>
</html>