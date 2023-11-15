<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03/index.php">
                World Clock
            </a>
        </div>
    </header>
    <main>
        <div class="serch-form__content">
            <div class="serch-form__heading">
                <h2>日本と世界の時間を比較</h2>
            </div>
            <form class="serch-form" action="result.php" method="GET">
                <div class="serch-form__item">
                    <select class="serch-form__item-select" name="city">
                        <option value="シドニー">シドニー</option>
                        <option value="上海">上海</option>
                        <option value="モスクワ">モスクワ</option>
                         <option value="ロンドン">ロンドン</option>
                         <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                         <option value="ニューヨーク">ニューヨーク</option>
                    </select>     
                </div>
                <div class="serch-form__button">
                    <button class="serch-form__button-submit" type="submit">検索</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>