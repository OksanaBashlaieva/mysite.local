<?php

//строчка в таблицу умножения вида "5 х 7 = 35"
function GetStrForMultiplTable($m1, $m2) {
    $str_res = $m1 . " x " . $m2 . " = " . $m1*$m2; 
    return $str_res;

}


//столбец таблицы умножения, первый множитель + красить или нет
function GetMultipleTableCol($m1, $need_color)
{
    $str_res = "";
    $e = 0;
    for ($i = 1; $i <= 10; $i++) {
        $str_res .=  GetStrForMultiplTable($m1, $i);
        if ($i < 10 ) { $str_res .= "<br/>"; } //перевод строки, не нужен после $m1 * 10
    }

    if ($need_color== true){
        return GetColoredStrForMultiplTable($str_res);
    }
    else
    {
        return $str_res;
    }
             
}

//покрасить циферки в строке, на входе строка с результатами, на выходе - с тегами для раскраски символов
function GetColoredStrForMultiplTable($str_in){
    $str_res = "";
    $str_tmp = "";
    $ch_cnt = strlen($str_in)-1;
    for ($i = 0; $i <= $ch_cnt; $i++)
    {
            switch ($str_in[$i]) {
            case "1":
                $str_tmp = "<font color=\"red\">" . $str_in[$i] . "</font>";
            break;
            case "2":
                $str_tmp = "<font color=\"green\">" . $str_in[$i] . "</font>";
            break;
            case "3":
                $str_tmp = "<font color=\"yellow\">" . $str_in[$i] . "</font>";
            break;
            case "4":
                $str_tmp = "<font color=\"blue\">" . $str_in[$i] . "</font>";
            break;
            default:
                $str_tmp = $str_in[$i];
            break;
        }
       $str_res .= $str_tmp; 
    }
return $str_res;

}

//таблица умножения вся, сверстана в таблицу, 5 колонок 2 строки, на входе параметр красить/не красить
function GetMultTable($need_color){
$str_res = "";
$str_res .= "<table border=\"1\" cellpadding=\"5\"><tr>";

for ($i = 1; $i <= 5; $i++) //верстаем первые 5 колонок, от 1 до 5
    {
        $str_res .= "<td>" . GetMultipleTableCol($i, $need_color) . "</td>";
    }
$str_res .= "</tr><tr>";

for ($i = 6; $i <= 10; $i++) //верстаем вторые 5 колонок, от 6 дщо 10
    {
        $str_res .= "<td>" . GetMultipleTableCol($i, $need_color) . "</td>";
    }
$str_res .=  "</tr></table>";

return $str_res;

}


//строка наоборот
function ReversString($str_in){
    $str_res = "";
    
    $ch_cnt = strlen($str_in)-1;
        for ($i = $ch_cnt; $i >= 0; $i--)
        {
                $str_res .= mb_substr($str_in, $i, 1);
        }
    
    return $str_res;
    }

?>