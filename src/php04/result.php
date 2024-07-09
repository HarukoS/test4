<?php

require_once('config/status_codes.php');

/*answer_codeは問題文の正しい答えのcode*/
$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
var_dump($answer_code);
/*optionはユーザーが選択した一つのcode*/
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);

/*もし$optionがTRUEでない場合（解答の選択肢を何も選ばなかった場合、index.phpに遷移する*/
if (!$option) {
  header('Location: index.php');
}

/*もしユーザーが選択したcodeが正解のcode（$answer_code）と同じ場合、新しく作成した変数$codeにcodeを代入し、変数$descriptionにdescriptionを代入する*/
foreach ($status_codes as $status_code) {
    if ($status_code['code'] === $answer_code) {
        $code = $status_code['code'];
        $description = $status_code['description'];
    }
}
/*新しい変数$resultを作成し、ユーザーが選択したcodeと$code（$answer_code）が合致したものを代入*/
$result = $option === $code;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php04">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result">
            <!--もし$resultがtrueの場合の書き方-->
            <?php if ($result): ?>
            <h2 class="result__text--correct">正解</h2>
            <!-- または if(!$): -->
            <?php else: ?>
            <h2 class="result__text--incorrect">不正解</h2>
            <!-- if (): とendif;はセット-->
            <?php endif; ?>
            </div>
            <div class="answer-table">
            <table class="answer-table__inner">
                <tr class="answer-table__row">
                    <th class="answer-table__header">ステータスコード</th>
                    <td class="answer-table__text"><?php echo $code ?></td>
                </tr>
                <tr class="answer-table__row">
                    <th class="answer-table__header">説明</th>
                    <td class="answer-table__text"><?php echo $description ?></td>
                </tr>
            </table>
            </div>
        </div>
    </main>
</body>

</html>