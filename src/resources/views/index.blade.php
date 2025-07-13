<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    th {
      padding: 10px;
      background-color: #eee;
    }

    td {
      padding: 10px 20px;
      border-bottom: 1px solid #eee;
    }

    .page__link {
      margin-top: 100px;
      text-align: center;
    }
  </style>
</head>

<body>
  <h1>first-laravel-retrieval</h1>
  <p>これはfirst-laravelの復習です</p>

  <table>
    <tr>
      <th colspan="3">復習予定</th>
    </tr>
    <tr>
      <th>first-laravel</th>
      <th>advance-laravel</th>
      <th>third-laravel</th>
    </tr>
    <tr>
      <td>
        環境構築をクローンした場合で作成してみる
        <br>その他、基本的なファイル記述の確認
      </td>
      <td>MVC構造とCRUD処理の再確認</td>
      <td>Laravel基礎教材の全体的な復習</td>
    </tr>
  </table>

  <p>{{ $date->format('Y/m/d H:i:s') }}</p>
  <p>{{ $content }}をしています</p>
  <p>ここにはパスパラメータの「{{ $text }}」が入るよ</p>

  <div class="page__link">
    <a class="page__link--hello" href="/hello">/hello へ</a>
  </div>
</body>

</html>