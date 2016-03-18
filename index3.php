<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/20
 * Time: 19:28
 */
require './PHPExcel.php';


//$phpreader = PHPExcel_IOFactory::createReader('excel2007');

//$phpexcel = PHPExcel_IOFactory::load('1.xlsx');
//$phpexcel = $phpreader->load('1.xlsx');

//echo $phpexcel->getSheetCount();
//
//$arr=$phpexcel->getSheetNames();
//var_dump($arr);
//$phpexcel->setActiveSheetIndexByName($arr[0]);
//
//$content =$phpexcel->getActiveSheet()->toArray();
//
//
//$currentSheet = $phpexcel->getActiveSheet();
////$rows = $currentSheet->getHighestRow();
////$cols = $currentSheet->getHighestColumn();
////echo $rows.'<br/>'.$cols;
//var_dump($content);

//var_dump($phpreader->listWorkSheetinfo('./1.xlsx'));
//$phpexcel->setActiveSheetIndexByName($arr[2]);
// echo $phpexcel->getActiveSheet()->getCell('A1')->getValue();



$phpexcel = PHPExcel_IOFactory::load('1.xlsx');
$arr=$phpexcel->getSheetNames();
//var_dump($arr);
$phpexcel->setActiveSheetIndexByName($arr[2]);
$currentSheet = $phpexcel->getActiveSheet();
$rows = $currentSheet->getHighestRow();
$cols = $currentSheet->getHighestColumn();

echo $rows.'<br/>'.$cols;

$arr = array();
for($i=1;$i<=$rows;$i++){

    $newarr = array();

    for($j='A';$j<$cols;$j++){
        $adr = $j.$i;
        $data = $currentSheet->getCell($adr)->getValue();
        $newarr[]=$data;
    }
    $arr[]=$newarr;
}

var_dump($arr);

