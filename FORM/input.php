<?php

$input_names = [
    'your_name',
    'email',
];

$input_values = [];
foreach ($input_names as $input_name) {
    $input_values[$input_name] = $_POST[$input_name] ?? null;
}

$page_flag = 0;
if (isset($_POST['btn_confirm'])) {
    $page_flag =1;
}

if (isset($_POST['btn_submit'])) {
    $page_flag = 2;
}

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <?php if ($page_flag === 0) : ?>
      <h3>入力画面</h3>
      <form method="POST" action="input.php">
      <label for="your_name">氏名</label>
      <input type="text" name="your_name" value="<?php echo $input_values['your_name'] ?>">
      <br>
      <label for="email">メールアドレス</label>
      <input type="email" name="email" value="<?php echo $input_values['email'] ?>">
      <br>
      <input type="submit" name="btn_confirm" value="確認する">
    </form>
    <?php elseif ($page_flag === 1) : ?>
      <h3>確認画面</h3>
      <form method="POST" action="input.php">
        氏名
        <?php echo $_POST['your_name'] ?>
        <br>
        メールアドレス
        <?php echo $_POST['email'] ?>
        <br>
        <input type="hidden" name="your_name" value="<?php echo $_POST['your_name'] ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email'] ?>">
        <input type="submit" name="back" value="戻る">
        <input type="submit" name="btn_submit" value="送信する">
      </form>
    <?php elseif ($page_flag === 2) : ?>
      <h3>完了画面</h3>
    <?php endif ?>
  </body>
</html>
