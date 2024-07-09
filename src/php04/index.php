<?php
require_once('config/status_codes.php');

/*$status_codes配列のキーをランダムに4つ取り出して、$random_numbers変数に格納する*/
$random_numbers = array_rand($status_codes, 4);

/*ランダムに取得した配列のキーの要素を、新しく作成した$options配列に代入する*/
foreach ($random_numbers as $index) {
    $options[] = $status_codes[$index];
}

/*$options配列（0～3）の中から1つをランダムに選び$question配列に代入する*/
$question = $options[mt_rand(0, 3)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code QUiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
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
    <div class="quiz__content">
        <div class="question">
            <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
            <p class="question__text"><?php echo $question['description'] ?></p>
        </div>
        <!--データの送信を行う-->
        <form class="quiz-form" action="result.php" method="post">
            <!--inputタグがhidden属性なのは、ブラウザに表示させないため。ブラウザに表示させず、データの送信を行うことができる-->
            <!--問題の正しいcode-->
            <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
            <div class="quiz_form__item">
                <?php foreach ($options as $option): ?>
                <div class="quiz-form__group">
                    <!--inputタグのidとlabelタグのforに同じ名前を入れると関連づけることができる-->
                    <!--valueは送信されるデータ-->
                    <!--ユーザーが選んだ答えのcode-->
                    <input class="quiz-form__radio" id="<?php echo $option['code'] ?>" 
                    type="radio" name="option" 
                    value="<?php echo $option['code'] ?>">
                    <label class="quiz-form__label"
                    for="<?php echo $option['code'] ?>">
                    <!--inputタグとlabelタグ自体は見えないので、ここで可視化する-->
                    <?php echo $option['code'] ?>
                    </label>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="quiz-form__button">
                <!--form内のbuttonタグは、自動的に自身を含むformに紐づけられ、データの送信を行う-->
                <button class="quiz-form__button-submit" type="submit">
                    回答
                </button>
            </div>
        </form>
    </div>
    </main>
</body>
</html>