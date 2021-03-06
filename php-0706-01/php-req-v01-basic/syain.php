<?php
require_once("setting.php");

header( "Content-Type: text/html; charset=utf-8" );

// データベースに接続する
require_once("db_connect.php");
require_once("model.php");

// ***********************************
// SQL 文字列
// ***********************************
$sql = <<<QUERY
select 
    社員マスタ.社員コード,
    社員マスタ.氏名,
    社員マスタ.フリガナ,
    社員マスタ.所属,

    case 社員マスタ.性別
        when 1 then '男'
        when 0 then '女'
    end as 性別,

    DATE_FORMAT(社員マスタ.作成日,'%Y/%m/%d') as 作成日,
    DATE_FORMAT(社員マスタ.更新日,'%Y/%m/%d') as 更新日,
    社員マスタ.給与,
    社員マスタ.手当,
    社員マスタ.管理者,
    DATE_FORMAT(社員マスタ.生年月日,'%Y/%m/%d') as 生年月日
   ,コード名称マスタ.名称
 from 社員マスタ
 left outer join コード名称マスタ
 on  社員マスタ.所属 = コード名称マスタ.コード
 and 2 = コード名称マスタ.区分
where 社員マスタ.氏名 like :name
order by 社員マスタ.社員コード
QUERY;

// ***********************************
// 準備
// ***********************************
$statement = $pdo->prepare($sql);

// ***********************************
// バインド
// ***********************************
$statement->bindValue(':name', "%{$_REQUEST["name"]}%", PDO::PARAM_STR);

// ***********************************
// 実行
// ***********************************
$statement->execute();

// ***********************************
// 読込み
// ***********************************
$html = get_table( $statement );

// ***********************************
// 終了処理
// ***********************************
$statement = null;
$pdo = null;

// ***********************************
// 画面
// ***********************************
require_once("syain-view.php");

?>