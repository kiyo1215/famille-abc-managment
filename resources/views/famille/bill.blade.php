<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ふぁみーゆ支払い計算</title>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/calculation.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv=" X-UA-Compatible" content="ie=edge">
</head>
<body>
  <main>
  <h1>ふぁみーゆ支払い計算</h1>

  <form name="form" action="#">
    <h2>初回セット<span>※必須</span></h2>
    <div class="first-price">
      <input type="radio" name="first" value="60-2">バータイム
      <input type="radio" name="first" value="90">G1コース
      <input type="radio" name="first" value="60">G2コース
    </div>

    <div class="extension">
      <h2>延長<span>※必須</span></h2>
      <div class="time">
        <p>来た時間<input type="number" name="come_hour" id="come_hour">時
        <input type="number" name="come_minute" id="come_minute">分</p>
      </div>
      <div class="time">
        <p>帰る時間<input type="number" name="go_hour" id="go_hour">時
        <input type="number" name="go_minute" id="go_minute">分</p>
      </div>
      <p>延長回数<input type="text" name="extension_q" id="extension_q" value="0">回</p>
      <p>延長料金<input type="text" name="extension_p" id="extension_p" value="0">円</p>
    </div>

    <div class="cast-drink">
      <h2>キャストドリンク</h2>
      <p class="check">※G1コースの場合、１杯少ない数字を入力</p>
      <p><input type="number" name="castDrinkQuantity">杯</p>
      <p><input type="text" id="field1" name="field1">円</p>
    </div>

    <div class="cheki">
      <h2>チェキ</h2>
      <p><input type="number" name="cheki_quantity">枚</p>
      <p><input type="text" id="feild2" name="field2">円</p>
    </div>

    <div class="champagne">
      <h2 id="champagne-style">シャンパン</h2>

      <p>ノンアルコール</p>
      <p>
        <input type="number" name="champagneA">本
        <input type="text" id="feild4" class="champagne_p">円
      </p>

      <p>カフェ・ド・パリ</p>
      <p>
        <input type="number" name="champagneB">本
      　<input type="text" id="feild5" class="champagne_p">円
    　</p>

      <p>アスティ</p>
      <p>
        <input type="number" name="champagneC">本
      　<input type="text" id="feild6" class="champagne_p">円
    　</p>

      <p>モエ・エ・シャンドン</p>
      <p>
        <input type="number" name="champagneD">本
      　<input type="text" id="feild7" class="champagne_p">円
    　</p>

      <p>ヴーヴ・クリコ<p>
      <p><input type="number" name="champagneE">本
      <input type="text" id="feild8" class="champagne_p">円</p>

      <p>モエ・エ・シャンドン・ロゼ</p>
      <p><input type="number" name="champagneF">本
      <input type="text" id="feild9" class="champagne_p">円</p>

      <p>モエ・エ・シャンドン・クロ</p>
      <p><input type="number" name="champagneG">本
      <input type="text" id="feild10" class="champagne_p">円</p>

      <p>ドン・ペリニオン</p>
      <p><input type="number" name="champagneH">本
      <input type="text" id="feild11" class="champagne_p">円</p>

      <p>ドン・ペリニオン・ロゼ</p>
      <p><input type="number" name="champagneI">本
      <input type="text" id="feild12" class="champagne_p">円</p>
      </p>
      </p>
    </div>

    <div class="outher">
      <h2>その他(限定メニューや割引等）</h2>
      <p>＋<input type="number" name="outher_p" id="outher_p">円</p>
      <p>ー<input type="number" name="outher_m" id="outher_m">円</p>
    </div>

    <button type="button" onclick="calc(
      castDrinkQuantity.value,
      cheki_quantity.value,
      come_hour.value,
      come_minute.value,
      go_hour.value,
      go_minute.value,
      first.value,
      outher_p.value,
      outher_m.value,
      champagneA.value,
      champagneB.value,
      champagneC.value,
      champagneD.value,
      champagneE.value,
      champagneF.value,
      champagneG.value,
      champagneH.value,
      champagneI.value,
      extension_q.value,
      extension_p.value
      );">計算</button>
      <p class="check">※２回押す</p>
  </form>
  <p class="all_p">合計金額<input type="text" name="all_p" id="all_p">円</p>

  <a href="https://kiyo1215.github.io/fbm/">リセット</a>

  </main>
　<script src="{{asset('js/main.js')}}"></script>
  </body>
</html>