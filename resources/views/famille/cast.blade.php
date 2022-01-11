<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>My Site</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cast.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv=" X-UA-Compatible" content="ie=edge">
</head>
<body>
  <header>
    <h1>Famile Cast Managment</h1>
  </header>
  <main>
    <div class="index">
      <table>
        <tr>
          <th>名前</th>
          <th>勤務時間</th>
          <th>ドリンク</th>
          <th>チェキ</th>
        </tr>
        @foreach($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->work_start_time }}</td>
          <td>{{ $user->drink }}</td>
          <td>{{ $user->cheki }}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </main>

</body>

</html>