<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js?hl=jp" async defer></script>
    <title>Document</title>
</head>

<body>
    <div class="g-recaptcha mt-5" data-sitekey="サイトキー" data-theme="light" data-size="normal" data-callback="verifyCallback" data-expired-callback="expiredCallback"></div>
    <p class="mb-4" id="warning">送信するにはチェックを入れてください。</p>
</body>

</html>


<?php
$recaptcha = htmlspecialchars($_POST['g-recaptcha-response'], ENT_QUOTES,  'UTF-8');

if (isset($recaptcha)) {
    $secret = 'シークレットキー';
    $res = @file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptcha}");
    $result = json_decode($res, true);

    if (intval($result["success"]) !== 1) {
        // reCAPTCHA認証エラー
    }
} else {
    // reCAPTCHAトークン取得エラー
}
?>