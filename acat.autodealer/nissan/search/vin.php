<?php
ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
/** Обязательно к применению */
include "../../_lib.php"; /// После подключения доступен класс A2D
include "../api.php";     /// После подключения доступен класс NIS

/// Устанавливаем объект $oNIS - объект для работы с каталогом Nissan
$oNIS = NIS::instance();

$vin = A2D::get($_GET,'vin');
$mark = A2D::get($_GET,'mark');

/// Проверяем на корректность ввода данных
if(empty($vin)) $msg[] = 'Не указан VIN';
if(empty($mark)) $msg[] = 'Не указана марка(NISSAN или INFINITI)';
if(!empty($vin) && (strlen($vin) < 9 || strlen($serial) > 17)) $msg[] = 'Длинна VIN должна быть не меньше 9 и не больше 17 символов';

/// Получаем данные собственно
if(empty($msg)) $searchRezult = $oNIS->searchNisVIN($vin, $mark);

/// Хлебные крошки
A2D::$aBreads = A2D::toObj([
    'types' => [
        "name" => 'Каталог',
        "breads" => []
    ],
    'marks' => [
        "name" => 'Легковые (иномарки)',
        "breads" => [0 => '&typeID=' . NIS::$_typeID]
    ],
    'nissan/markets' => [
        'name' => strtoupper($mark),
        'breads' => [
            0 => '&mark=' . strtoupper($mark)
        ]
    ],
    'vin' => [
        'name' => 'Поиск по VIN',
        'breads' => []
    ]
]);
A2D::$catalogRoot = "";
A2D::$showMark = FALSE;


if( ($errors = A2D::property($searchRezult,'errors')) ) {
    if( $errors->msg=="_Nissan_Search_VIN VIN_Empty" )      $msg = "Не указан VIN";
    if( $errors->msg=="_Nissan_Search_VIN Empty_Response" ) $msg = "По Вашему запросу ничего не найдено";
}else{
    $aRezult = A2D::property($searchRezult,'models',[]);
    $count = count((array)$aRezult);
    /// Если сервер вернул одну модель, нет смысла показывать одну строчку, сразу переходим в модель
    $url = '/nissan/groups.php?market='.$aRezult[0]->market.'&model='.$aRezult[0]->modelCode.'&modif='.$aRezult[0]->compl;
    if( $count == 1 ) $oNIS->redirect($url);

    $aCurrent = current($aRezult);
    $aFields = [];
    foreach($aRezult as $km=>$rez) {
        $i = 0;
        foreach ($rez as $k => $v) {
            $notIn = !in_array($k, ['market','marketRU', 'modelName', 'modelCode', 'compl', 'dir', 'prod', 'other']);
            $notInList = !in_array(NIS::translate(strtolower(trim($k))),$aFields);
            if($notIn) {
                if ($notInList) {
                    if(!empty($aFields[$i])) $aFields[$i] .= ' / '.NIS::translate(strtolower($k));
                    else $aFields[] = NIS::translate(strtolower($k));
                }$i++;
            }
        }
    }
    $shrts=[];
    if(!empty($aRezult)) {
        foreach ($aRezult AS $k => $aRezrow) {
            foreach ($aRezrow as $k2 => $value) {
                if (!in_array($k2, ['market','marketRU', 'modelName', 'modelCode', 'compl', 'dir', 'prod', 'other'])) {//исключаю постоянные поля, они не меняются

                    $aList[strtolower($k2)] = [];
                    if ($k == 0) $shrts[strtolower($k2)][] = $value;
                    elseif (!array_key_exists(strtolower($k2),$shrts) || ($k > 0 && (!in_array($value, $shrts[strtolower($k2)])))) {
                        $shrts[strtolower($k2)][] = $value;
                    }
                } elseif (strtolower($k2) == 'other' && !empty($value)) {
                    if ($k == 0 && $k2 == 0) $shrts['other'] = [];//для сравнения in_array
                    $value = explode(' ',$value);
                    foreach ($value as $item) {
                        if (!in_array($item, $shrts['other'])) $shrts['other'][] = $item;
                    }
                }
            }
        }
    }
    $aList = array();

    $_list = A2D::property($searchRezult,'info',[]);
    if(!empty($_list))//бывает что список пуст...
        foreach($_list as $k=>$item){
            foreach($shrts as $k2=>$short){
                if(in_array($item->ABBRSTR,$short)) {
                    $aList[$k2][$item->ABBRSTR] = $item->DESCRSTR;
                }
            }
        }
    //делаю ключи русскими для вьюшки, т.к. во вьюхе только вывод, без какой либо логики
    foreach($aFields as $field) $newList[$field] = []; $newList['Другое'] = [];
    if(!empty($aList))
        foreach($newList as $key2=>$item2) {
            foreach($aList as $k=>$item){
                if(!in_array($newList[$key2],$item) && ( $key2 == NIS::translate($k)  || stripos($key2,NIS::translate($k))) ){
                    $newList[$key2] = $item;
                }
            }
        }
    $aList = $newList;
}

include "view/vinANDframe/index.php";     /// Подключаю отображение
?>