<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js?hl=jp" async defer></script>
    <script src="../js/recaptcha.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="g-recaptcha mt-5" data-sitekey="6LelgD0fAAAAAHWXTT7T-rMkvJzeR_SoGaGl8rsj" data-theme="light" data-size="normal" data-callback="verifyCallback" data-expired-callback="expiredCallback"></div>
    <p class="mb-4" id="warning">送信するにはチェックを入れてください。</p>
</body>

</html>


<?php
$recaptcha = htmlspecialchars($_POST['g-recaptcha-response'], ENT_QUOTES,  'UTF-8');

if (isset($recaptcha)) {
    $secret = '6LelgD0fAAAAAOx-MRWhBDucVfeCuJrB3E6n3NGJ';
    $res = @file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptcha}");
    $result = json_decode($res, true);

    if (intval($result["success"]) !== 1) {
        // reCAPTCHA認証エラー
    }
} else {
    // reCAPTCHAトークン取得エラー
}
?>