<?php
// **************************
// 社員コードで存在チェック
// **************************
function check( $mysqli ) {

    $query = "select * from 商品マスタ where 商品コード = '{$_POST["scode"]}'";
    $result = $mysqli->query( $query );
    $row = $result->fetch_array( MYSQLI_BOTH );

    return $row;
}

// **************************
// 更新処理
// **************************
function insert( $mysqli ) {

    if ( $_POST["biko"] == ""  ) {
        $_POST["biko"] = "NULL";
    }

    $query = <<<QUERY

insert into 商品マスタ 
(商品コード,
商品名,
在庫評価単価,
販売単価,
商品分類,
商品区分,
備考
)
values('{$_POST["scode"]}'
,'{$_POST["sname"]}'
,'{$_POST["ztanka"]}'
,'{$_POST["htanka"]}'
,{$_POST["stype"]}
,{$_POST["skbn"]}
,{$_POST["biko"]}
)

QUERY;

    $mysqli->query( $query );

}


function update( $mysqli ) {

    if ( $_POST["biko"] == ""  ) {
        $_POST["biko"] = "NULL";
    }

    $query = <<<QUERY

update 商品マスタ set 

商品名 = '{$_POST["sname"]}',
在庫評価単価 = {$_POST["ztanka"]},
販売単価 = {$_POST["htanka"]},
商品分類 = '{$_POST["stype"]}',
商品区分 = '{$_POST["skbn"]}',
備考 = '{$_POST["biko"]}'

where 商品コード = '{$_POST["scode"]}'

QUERY;

    $mysqli->query( $query );

}

// **************************
// デバッグ表示
// **************************
function debug_print() {

    print "<pre class=\"m-5\">";
    print_r( $_GET );
    print_r( $_POST );
    print_r( $_SESSION );
    print_r( $_FILES );
    print "</pre>";

}
