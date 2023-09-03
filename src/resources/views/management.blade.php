<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/management.css') }}" />
    <title>お問い合わせフォーム</title>
</head>
<body>
    <div class="management">
        <div class="management_heading">
            <h2 class="title">管理システム</h2>
        </div>
        <div class="form">
            <form class="form-search" action="/management" method="get">
                <div class="search">
                    <div class="search-group">
                        <p class="search-ttl">お名前</p>
                        <input class="search-input" type="text">
                        <p class="search-ttl-second">性別</p>
                        <input class="search-radio" type="radio" name="gender" value="全て" checked>全て
                        <input class="search-radio" type="radio" name="gender" value="男性">男性
                        <input class="search-radio" type="radio" name="gender" value="女性">女性
                    </div>
                    <div class="search-group">
                        <p class="search-ttl">登録日</p>
                        <input class="search-input" type="text">
                        <span>〜</span>
                        <input class="search-input" type="text">
                    </div>
                    <div class="search-group">
                        <p class="search-ttl-second">メールアドレス</p>
                        <input class="search-input" type="text">
                    </div>
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">検索</button>
                    </div>
                    <div class="resetーbutton">
                        <button class="resetーbutton-submit" type="submit"name='' value="">リセット</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="table-result">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>ご意見</th>
                </tr>
              
                <tr>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>
                        <div class="delete__button">
                            <button class="delete__button-submit" type="submit">削除</button>
                        </div>
                    </td>
                </tr>
                
            </table>
        </div>
    </div>
</body>
</html>