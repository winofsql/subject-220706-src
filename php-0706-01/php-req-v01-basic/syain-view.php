<!DOCTYPE html>
<html>

<head>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta charset="utf-8">
<title><?= $title ?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$( function(){

    $("tr").on("click", function(){
        var scode = $(this).find("td").eq(0).text();
        opener.$("#scode").val(scode);
        opener.$("#btn").click();
        window.close();
    });

});    
</script>

<style>
#content {
    margin: 0 26px 26px 26px;
}

td,th {
    cursor: default!important;
    white-space: pre;
}

#tbl {
    user-select: none;
}

.folder {
    float: right;
}
</style>

</head>

<body>
<h3 class="alert alert-primary">
    <?= $title ?>
    <a href="." class="btn btn-secondary btn-sm folder me-4">フォルダ</a>
</h3>
<div id="content">

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>社員コード</th>
                    <th>氏名</th>
                    <th>フリガナ</th>
                    <th>所属名</th>
                    <th>性別</th>
                    <th></th>
                    <th></th>
                    <th>給与</th>
                    <th>手当</th>
                    <th>管理者</th>
                    <th>生年月日</th>
                </tr>
            </thead>
            <tbody id="tbl">
                <?= $html ?>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>
