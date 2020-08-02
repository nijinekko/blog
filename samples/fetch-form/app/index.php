<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>ajaxを用いたフォーム送信サンプル</title>
  </head>
  <body>
    <form method="post" action="echo.php">
      <label for="name">名前</label>
      <input id="name" name="name" type="text" /><br />
      <label><input name="sex" type="radio" value="male" />男性</label>
      <label><input name="sex" type="radio" value="female" />女性</label><br />
      <label for="age">年齢</label>
      <select id="age" name="age">
        <option value="teens">10代</option>
        <option value="20s">20代</option>
        <option value="30s">30代</option>
        <option value="40s">40代</option>
        <option value="50s+">50代以上</option>
      </select><br />
      <label for="introduction">自己紹介</label>
      <textarea id="introduction" name="introduction"></textarea><br />
      <input type="submit" value="送信" />
    </form>
  </body>
</html>
