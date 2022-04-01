<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
        <!-- Bootstrap Javascript(jQuery含む) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="../php/index.php"></script>
    <title>新入生案内サイト</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-3 mb-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">新入生案内サイト</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.html">ホーム</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./join_club_form.php">入部申請</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">その他リンク</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- 入力フォーム -->
    <div class="container-fluid">
        <form>
            <div class="form-group">
                <label>
                    学校のメールアドレス
                </label>
                <input type="email" class="form-control" placeholder="e1b19110@oit.ac.jp">                
            </div>
            <div class="form-group">
                <label>
                    氏名
                </label>
                <input type="name" class="form-control" placeholder="大工太郎">                
            </div>
            <div class="form-group">
                <label>
                    学科
                </label>
                <input type="email" class="form-control" placeholder="ネットワークデザイン学科">                
            </div>

            <!-- reCAPTCHA -->
            <?php
            require('./recaptcha.php');
            ?>

            <button type="submit" class="btn btn-primary" id="send" disabled>送信</button>
        </form>
    </div>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Copyright © 2022 大阪工業大学 HxS コンピュータ部 All Rights Reserved.
            </p>
        </div>
    </footer>
</body>
</html>