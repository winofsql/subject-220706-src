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
        $_POST["sname"] = $row["氏名"];
        $_POST["fname"] = $row["フリガナ"];
        $_POST["syozoku"] = $row["所属"];
        $_POST["seibetsu"] = $row["性別"];
        $_POST["kyuyo"] = $row["給与"];
        $_POST["teate"] = $row["手当"];
        $_POST["kanri"] = $row["管理者"];
        $_POST["birth"] = $row["生年月日"];
    }
    else {
        $_POST["sname"] = "";
        $_POST["fname"] = "";
        $_POST["syozoku"] = "";
        $_POST["seibetsu"] = "";
        $_POST["kyuyo"] = "";
        $_POST["teate"] = "";
        $_POST["kanri"] = "";
        $_POST["birth"] = "";

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
    $_POST["fname"] = "";
    $_POST["syozoku"] = "";
    $_POST["seibetsu"] = "";
    $_POST["kyuyo"] = "";
    $_POST["teate"] = "";
    $_POST["kanri"] = "";
    $_POST["birth"] = "";

    //header('Location: http://localhost/php-0706-01/php-mtn-v03-update-insert/syain.php');

}

require_once("syain-view.php");

debug_print();
