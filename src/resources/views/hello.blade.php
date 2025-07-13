<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .page__link {
      margin-top: 100px;
      text-align: center;
    }
  </style>
</head>

<body>
  <h1>ブラウザにビューを表示しているよ</h1>

  <ul>
    <li>ビューの作成</li>
    <li>コントローラデビューを呼び出す</li>
    <li>ルーティングを設定する</li>
  </ul>

  <p>{{ $date->format('Y/m/d H:i:s') }}</p>
  <p>{{ $content }}をしています</p>
  <p>ここにはパスパラメータの「{{ $text }}」が入るよ</p>

  <div class="page__link">
    <a class="page__link--test" href="/test">/test へ</a>
  </div>
</body>

</html>