<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header_logo">
            <h1>Fashionably Late</h1>
        </div>
    </header>

    <main>
        <div class="contact_title">
            <h2>Contact</h2>
        </div>
        <form class="form" action="/confirm" method="post">
            @csrf
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label-item">お名前</span>
                    <span class="form_label-required">※</span>
                </div>
                <div class="form_group-content">
                    <div class="form_input-text1">
                        <input type="text" name="first_name" placeholder="例：山田" />
                        <input type="text" name="last_name" placeholder="例：太郎" />
                    </div>
                    <div class="form_error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label-item">性別</span>
                    <span class="form_label-required">※</span>
                </div>
                <div class="form_group-content">
                    <div class="form_input-text">
                        <input type="radio" name="gender" />
                        <span class="form_input-textM">男性<span>
                        <input type="radio" name="gender" />
                        <span class="form_input-textG">女性<span> 
                        <input type="radio" name="gender" />
                        <span class="form_input-textS">その他<span>
                    </div>
                    <div class="form_error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label-item">メールアドレス</span>
                    <span class="form_label-required">※</span>
                </div>
                <div class="form_group-content">
                    <div class="form_input-text">
                         <input type="email" name="email" placeholder="test@example.com" />
                    </div>
                    <div class="form_error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label-item">電話番号</span>
                    <span class="form_label-required">※</span>
                </div>
                <div class="form_group-content">
                    <div class="form_input-text">
                        <input type="tel" name="tell" placeholder="080" />
                        <span class="form_input-text-">-</span>
                        <input type="tel" name="tell" placeholder="1234" />
                        <span class="form_input-text-">-</span>
                        <input type="tel" name="tell" placeholder="5678" />
                    </div>
                </div>
                <div class="form_error">
                        <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label-item">住所</span>
                    <span class="form_label-required">※</span>
                </div>
                <div class="form_group-content">
                    <div class="form_input-text">
                        <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" />
                    </div>
                </div>
                <div class="form_error">
                        <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label-item">建物名</span>
                </div>
                <div class="form_group-content">
                    <div class="form_input-text">
                        <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" />
                    </div>
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label-item">お問い合わせの種類</span>
                    <span class="form_label-required">※</span>
                </div>
                <div class="form_group-content">
                    <div class="form_input-text">
                        <select name="content">
                            <option value="選択してください">選択してください</option>
                        </select>
                    </div>
                </div>
                <div class="form_error">
                        <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label-item">お問い合わせ内容</span>
                    <span class="form_label-required">※</span>
                </div>
                <div class="form_group-content">
                    <div class="form_input-text">
                        <textarea name="detail" cols="30" rows="3" placeholder="お問い合わせ内容をご記入ください"></textarea>
                        <span class="form_label-required">※</span>
                    </div>
                </div>
                <div class="form_error">
                        <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form_group">
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>