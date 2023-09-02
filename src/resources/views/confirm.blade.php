<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
    <title>お問い合わせフォーム</title>
</head>
<body>
    <div class="confirm">
        <div class="inquiry-form_heading">
            <h2 class="title">内容確認</h2>
        </div>
        <form class="confirm__form" action="/inquiries" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">お名前</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="form__input" type="text" name="fullname" value="{{ $contact['fullname'] }}" readonly />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">性別</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="form__input" type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">メールアドレス</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="form__input" type="text" name="email" value="{{ $contact['email'] }}" readonly />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">郵便番号</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="form__input" type="text" name="postcode" value="{{ $contact['postcode'] }}" readonly />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">住所</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="form__input" type="text" name="address" value="{{ $contact['address'] }}" readonly />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">建物名</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="form__input" type="text" name="building_name" value="{{ $contact['building_name'] }} " readonly />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">ご意見</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <textarea class="form-textarea" name="opinion" cols="30" rows="3" readonly>{{ $contact['opinion'] }}</textarea>
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>
            <div class="modifyーbutton">
                <button class="modifyーbutton-submit" type="submit"name='back' value="back">修正する</button>
            </div>
        </form>
    </div>
</body>
</html>