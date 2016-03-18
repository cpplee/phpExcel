<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/20
 * Time: 19:28
 */
require './PHPExcel.php';


$phpexcel = new phpExcel();
$excelName='111_1.xls';
$phpexcel->setActiveSheetIndex(0);
$currentSheet = $phpexcel->getActiveSheet();
$currentSheet->setCellValue('A1',1)->setCellValue('B1',2)->setCellValue('C1','=sum(A1:B1)');

$currentSheet->getColumnDimension('A')->setWidth(12);

//$currentSheet->getColumnDimension('A')->setAutoSize(true);

$currentSheet->getRowDimension('1')->setRowHeight(20);

$phpexcelwriter = new PHPExcel_Writer_Excel5($phpexcel);

$phpexcelwriter->save($excelName);