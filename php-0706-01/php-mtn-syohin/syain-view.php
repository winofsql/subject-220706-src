<!DOCTYPE html>
<html>

<head>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="syain.css?_=<?= time() ?>">
<script>
// ******************************
// 確認ボタンの時の送信チェック
// ******************************
function check(){
    var scode = $("#scode").val();
    if ( scode.length != 4 ) {
        alert("社員コードを4桁入力してください");
        return false;
    }

    return true;
}
</script>
</head>

<body>
<h3 class="alert alert-primary">商品マスタメンテ</h3>
<div id="content">

    <form method="post"
        onsubmit="return check()">
    <div>
        <div class="entry left">商品コード</div>
        <div class="entry right">
            <input class="form-control"
                required
                maxlength="4"
                pattern="[0-9]+"
                placeholder="9999"
                type="text"
                name="scode"
                id="scode"
                value="<?= $_POST["scode"] ?>">
        </div>
        <input type="submit" name="btn" id="btn" class="btn btn-primary ms-4" value="確認">
    </div>

    <div>
        <div class="entry left">商品名
        </div>
        <div class="entry right">
            <input class="form-control"
                type="text"
                name="sname"
                id="sname"
                value="<?= $_POST["sname"] ?>">
        </div>
    </div>
    <div>
        <div class="entry left">在庫評価単価
        </div>
        <div class="entry right">
            <input class="form-control"
                type="text"
                name="ztanka"
                id="fname"
                value="<?= $_POST["ztanka"] ?>">
        </div>
    </div>
    <div>
        <div class="entry left">販売単価
        </div>
        <div class="entry right">
            <input class="form-control"
                type="text"
                name="htanka"
                id="syozoku"
                value="<?= $_POST["htanka"] ?>">
        </div>
    </div>
    <div>
        <div class="entry left">商品分類
        </div>
        <div class="entry right">
            <input class="form-control"
                type="text"
                name="stype"
                id="seibetsu"
                value="<?= $_POST["stype"] ?>">
        </div>
    </div>
    <div>
        <div class="entry left">商品区分
        </div>
        <div class="entry right">
            <input class="form-control"
                type="text"
                name="skbn"
                id="kyuyo"
                value="<?= $_POST["skbn"] ?>">
        </div>
    </div>
    <div>
        <div class="entry left">備考
        </div>
        <div class="entry right">
            <input class="form-control"
                type="text"
                name="biko"
                id="kanri"
                value="<?= $_POST["biko"] ?>">
        </div>
    </div>

    <div class="mt-4">
        <input type="submit" name="btn" id="btn" class="btn btn-primary" value="更新">
        <span class="ms-5"><?= $_POST["message"] ?></span>
    </div>

    </form>

</div>

</body>
</html>
