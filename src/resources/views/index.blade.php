<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問合せフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <div class="inquiry-form">
        <div class="inquiry-form_heading">
            <h2 class="title">お問い合わせ</h2>
        </div>
        <form class="form" action="/inquiries/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title-item">
                    <p class="form__label--item">お名前<span class="form__label--required">※</span></p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="input-name" type="text" name="fullname" value="{{ old('fullname') }}">

                    </div>
                    <div class="example_name">
                        <span class="example">例）山田</span>
                        <span class="example__first">例）太郎</span>
                    </div>
                        <div class="form__error">
                            @error('fullname')
                            {{ $message }}
                            @enderror
                        </div>

                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title-item">
                    <p class="form__label--item">性別<span class="form__label--required">※</span></p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <div class="form__input--gender">
                            <input class="form__input--radio" type="radio" name="gender" value="男" checked>男
                            <input class="form__input--radio" type="radio" name="gender" value="女">女
                        </div>
                        <div class="form__error">
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">メールアドレス<span class="form__label--required">※</span></p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="form__input" type="email" name="email" value="{{ old('email') }}">
                        <p class="example">例）test@example.com</p>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group-post">
                <div class="form__group-title">
                    <p class="form__label--item">郵便番号<span class="form__label--required">※</span></p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <span class="form__input--symbol">〒</span>
                        <input class="form__input-post" type="text" name="postcode" value="{{ old('postcode') }}">
                        <p class="example-post">例）123-4567</p>
                        <div class="form__error">
                            @error('postcode')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">住所<span class="form__label--required">※</span></p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="form__input" type="text" name="address" value="{{ old('address') }}">
                        <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">建物名</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="form__input" type="text" name="building_name" value="{{ old('building_name') }}">
                        <p class="example">例）千駄ヶ谷マンション101</p>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">ご意見<span class="form__label--required">※</span></p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <textarea class="form-textarea" name="opinion" cols="30" rows="3" >{{ old('opinion') }}</textarea>
                        <div class="form__error">
                            @error('opinion')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>
        </form>
    </div>
</body>
</html>