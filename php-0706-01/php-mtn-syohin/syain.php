<?php
require_once("setting.php");

header( "Content-Type: text/html; charset=utf-8" );

// データベースに接続する
require_once("db_connect.php");
require_once("model.php");


// データ表示処理
if ( $_POST["btn"] == "確認" ) {

    $row = check($mysqli);
    if ( $row ) {
        $_POST["sname"] = $row["商品名"];
        $_POST["ztanka"] = $row["在庫評価単価"];
        $_POST["htanka"] = $row["販売単価"];
        $_POST["stype"] = $row["商品分類"];
        $_POST["skbn"] = $row["商品区分"];
        $_POST["biko"] = $row["備考"];
    }
    else {
        $_POST["sname"] = "";
        $_POST["ztanka"] = "";
        $_POST["htanka"] = "";
        $_POST["stype"] = "";
        $_POST["skbn"] = "";
        $_POST["biko"] = "";

        $_POST["message"] = "新規登録です";
    }
}

// データ更新処理
if ( $_POST["btn"] == "更新" ) {

    $row = check($mysqli);
    // 社員コードが存在する
    if ( $row ) {
        update( $mysqli );
    }
    // 社員コードが存在しない
    else{
        insert( $mysqli );
    }

    $_POST["scode"] = "";
    $_POST["sname"] = "";
    $_POST["ztanka"] = "";
    $_POST["htanka"] = "";
    $_POST["stype"] = "";
    $_POST["skbn"] = "";
    $_POST["biko"] = "";

    //header('Location: http://localhost/php-0706-01/php-mtn-v03-update-insert/syain.php');

}

require_once("syain-view.php");

debug_print();
