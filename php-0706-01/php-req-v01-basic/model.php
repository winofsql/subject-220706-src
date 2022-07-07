<?php
// ***********************************
// 画面用テーブル要素文字列作成
// ***********************************
function get_table($statement) {

    $html = "";
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $html .= "<tr>\n";
        $html .= "\t<td>{$row["社員コード"]}</td>\n";
        $html .= "\t<td>{$row["氏名"]}</td>\n";
        $html .= "\t<td>{$row["フリガナ"]}</td>\n";
        $html .= "\t<td>{$row["名称"]}</td>\n";
        $html .= "\t<td>{$row["性別"]}</td>\n";
        $html .= "\t<td>{$row["作成日"]}</td>\n";
        $html .= "\t<td>{$row["更新日"]}</td>\n";
        $html .= "\t<td>{$row["給与"]}</td>\n";
        $html .= "\t<td>{$row["手当"]}</td>\n";
        $html .= "\t<td>{$row["管理者"]}</td>\n";
        $html .= "\t<td>{$row["生年月日"]}</td>\n";
        $html .= "</tr>\n";
    }

    return $html;

}